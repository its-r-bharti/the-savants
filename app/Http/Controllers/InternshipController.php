<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\InternshipRegistration;
use Illuminate\Support\Facades\Mail;

class InternshipController extends Controller
{
    public function showForm()
    {
        return view('internship.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'college_name' => 'required|string',
            'roll_number' => 'required|string',
            'address' => 'required|string',
            'field' => 'required',
            'duration' => 'required',
            'resume' => 'nullable|file|mimes:pdf'
        ]);

        $data['message'] = $request->message;

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('resumes', $filename, 'public');
            $data['resume'] = $path;
        }

        $registration = InternshipRegistration::create($data);

        $amounts = ['30' => 1200, '45' => 1700, '180' => 5500];
        $amount = $amounts[$data['duration']] * 100;
        // $amount = $amounts[$data['duration']] /10;

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order = $api->order->create([
            'receipt' => 'RCPT_' . uniqid(),
            'amount' => $amount,
            'currency' => 'INR'
        ]);

        return view('training.payment', [
            'order' => $order,
            'registration' => $registration,
            'amount' => $amount
        ]);
    }

    public function handlePayment(Request $request)
    {
        $registration = InternshipRegistration::find($request->input('registration_id'));

        if ($registration) {
            $registration->update([
                'razorpay_payment_id' => $request->input('razorpay_payment_id'),
                'payment_status' => 1
            ]);

            // Send confirmation email
            Mail::send('emails.internship-confirmation', ['registration' => $registration], function ($msg) use ($registration) {
                $msg->to($registration->email)
                    ->subject('Internship Confirmation - The Savants');
            });
            

            return redirect('/feature')->with('success', 'Payment successful! Confirmation sent to your email.');
        }

        return redirect('/')->with('error', 'Something went wrong. Please contact support.');
    }
}
