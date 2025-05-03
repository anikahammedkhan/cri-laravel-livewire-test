<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $step = 'credentials'; // credentials, otp, verification
    public $otp = ['', '', '', '', '', ''];

    public function submitCredentials()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Move to OTP step
        $this->step = 'otp';
    }

    public function submitOTP()
    {
        $otpString = implode('', $this->otp);

        // If OTP is correct, move to verification
        $this->step = 'verification';

        // Comment this out for testing the flow
        /*
        if ($otpString === '617704') {
            $this->step = 'verification';
        } else {
            $this->addError('otp', 'Wrong OTP, Try again');
        }
        */
    }

    public function submitVerification()
    {
        // Complete verification and redirect to dashboard
        return redirect()->intended(route('dashboard'));
    }

    public function resendOTP()
    {
        session()->flash('message', 'OTP has been resent to your email.');
    }

    public function goBack()
    {
        if ($this->step === 'otp') {
            $this->step = 'credentials';
        }
        // No back button from verification step based on the UI
    }

    public function render()
    {
        return view('livewire.login');
    }
}
