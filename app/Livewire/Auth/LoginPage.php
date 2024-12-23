<?php

namespace App\Livewire\Auth;

use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Illuminate\View\View;

class LoginPage extends Component
{
    public string $email;
    public string $password;
    public function login()
    {
        try {
            $this->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if(!auth()->attempt([
                'email' => $this->email,
                'password' => $this->password,
            ])) {
                session()->flash('error','Invalid credentials.');
                return;
            }

            switch (auth()->user()->grup) {
                case 'overkos':
                    return redirect()->route('overkos.dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                default:
                    break;
            }
            return redirect()->intended();
        } catch (\Exception $error) {
            if ($error instanceof ValidationException) {
                throw $error;
            } else {
                session()->flash('error','Something went wrong.');
            }
        }
    }
    public function render(): View
    {
        return view('livewire.auth.login-page');
    }
}
