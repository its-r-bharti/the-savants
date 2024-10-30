<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PricingPlanController extends Controller
{
    public function sendStandardPlan(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'school_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        try {
            Mail::raw("Name: {$validated['name']}\nEmail: {$validated['email']}\nSchool Name: {$validated['school_name']}\nPhone: {$validated['phone']}\nMessage: {$validated['message']}", function ($message) {
                $message->to('contact@thesavants.in')
                    ->subject('Standard Plan Subscription');
            });

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }


    public function sendProfessionalPlan(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'school_name' => 'required|string',
            'phone_number' => 'required|numeric',
            'template_id' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Send email
        Mail::send('emails.pricing_plan', [
            'name' => $request->name,
            'email' => $request->email,
            'school_name' => $request->school_name,
            'phone_number' => $request->phone_number,
            'template_id' => $request->template_id,
            'plan_type' => 'Professional',
            'message' => $request->message,
        ], function ($message) {
            $message->to('contact@thesavants.in')
                ->subject('New Professional Plan Subscription');
        });

        return response()->json(['message' => 'Professional plan email sent successfully!']);
    }
}
