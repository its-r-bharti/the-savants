<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternshipRegistration extends Model
{
    protected $fillable = ['name', 'email', 'field','phone', 'duration', 'message', 'resume', 'payment_status', 'razorpay_payment_id'];

}
