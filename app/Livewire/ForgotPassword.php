<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email = '';
    public $otp = ['', '', '', '', '', ''];
    public $password = '';
    public $password_confirmation = '';
    public $step = 'email'; // email, otp, reset-password, verification

    public function submitEmail()
    {
        $this->validate(['email' => 'required|email']);

        // In production, you'd send an OTP here
        $this->step = 'otp';
    }

    public function submitOTP()
    {
        // Validate that all OTP fields are filled
        foreach ($this->otp as $key => $value) {
            if (empty($value)) {
                $this->addError('otp', 'Please enter a complete OTP');
                return;
            }
        }

        $otpString = implode('', $this->otp);

        // Debug logging
        logger('OTP Value: ' . $otpString);
        logger('Current step: ' . $this->step);

        // Ensure step is updated properly
        $this->step = 'reset-password';

        // Debug after update
        logger('New step: ' . $this->step);
    }

    public function submitNewPassword()
    {
        logger('submitNewPassword method called');
        logger('Current step before: ' . $this->step);

        try {
            $this->validate([
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password'
            ]);
            logger('Validation passed');

            // Move to verification
            $this->step = 'verification';
            logger('Step changed to: ' . $this->step);
        } catch (\Exception $e) {
            logger('Error in submitNewPassword: ' . $e->getMessage());
        }
    }

    public function submitVerification()
    {
        // Complete password reset and redirect
        return redirect()->route('login');
    }

    public function resendOTP()
    {
        session()->flash('message', 'OTP has been resent to your email.');
    }

    public function goBack()
    {
        if ($this->step === 'otp') {
            $this->step = 'email';
        } elseif ($this->step === 'reset-password') {
            $this->step = 'otp';
        }
    }

    public function render()
    {
        return view('livewire.forgot-password');
    }
}
