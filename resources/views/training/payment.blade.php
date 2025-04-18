<!DOCTYPE html>
<html lang="en">

<head>

    @include('components.header')
</head>

<body>
    <div class="bg-white">
    
        <section class="bg-[#0f172a] py-20 min-h-screen flex justify-center items-center">
            <div class="bg-[#1e293b] text-white p-10 rounded-xl w-full max-w-xl shadow-lg">
                <h2 class="text-3xl font-semibold text-[#64FFDA] text-center mb-6">Confirm Your Details</h2>
                
                <div class="space-y-3 mb-6">
                    <p><strong>Name:</strong> {{ $registration->name }}</p>
                    <p><strong>Email:</strong> {{ $registration->email }}</p>
                    <p><strong>Phone:</strong> {{ $registration->phone }}</p>
                    <p><strong>College Name:</strong> {{ $registration->college_name }}</p>
                    <p><strong>Roll Number:</strong> {{ $registration->roll_number}}</p>
                    <p><strong>Field:</strong> {{ ucfirst($registration->field) }}</p>
                    <p><strong>Duration:</strong> 
                        @if($registration->duration == 30) 30 Days
                        @elseif($registration->duration == 45) 45 Days
                        @else 6 Months
                        @endif
                    </p>
                    <p><strong>Amount:</strong> ₹{{ $amount/100 }}</p>
                </div>
        
                <div class="flex space-x-4">
                    <!-- Proceed to Payment Button -->
                    <button id="rzp-button" class="bg-[#64FFDA] text-black w-full font-bold py-3 rounded-lg hover:bg-[#38fcd3] transition">
                        Proceed to Payment
                    </button>
        
                    <!-- Back Button -->
                    <button onclick="window.history.back();" class="bg-red-600 text-white w-full font-bold py-3 rounded-lg hover:bg-red-500 transition">
                        Go Back
                    </button>
                </div>
        
                <form name="razorpay-form" action="{{ route('training.payment.success') }}" method="POST" style="display: none">
                    @csrf
                    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                    <input type="hidden" name="registration_id" value="{{ $registration->id }}">
                </form>
            </div>
        </section>
        
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
        const options = {
            key: "{{ env('RAZORPAY_KEY') }}",
            amount: "{{ $amount * 100 }}",
            currency: "INR",
            name: "The Savants",
            description: "Internship Training Fee",
            order_id: "{{ $order['id'] }}", // ✅ FIXED here
            handler: function (response) {
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                document.forms['razorpay-form'].submit();
            },
            theme: {
                color: "#64FFDA"
            }
        };
        
        const rzp = new Razorpay(options);
        document.getElementById('rzp-button').onclick = function (e) {
            rzp.open();
            e.preventDefault();
        }
        </script>
       
        
        {{-- @include('components.footer') --}}
    </div>
    
</body>

</html>
