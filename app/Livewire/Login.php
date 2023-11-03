<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function rules() {
        return [
            'email' => 'required|min:5|email',
            'password' => 'required|min:7',
        ];
    }

    public function login() {
        $this->validate();

        if(User::select('id')->where('email', $this->email)->exists()) {
            if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
                session()->regenerate();
                return $this->redirect('/');
            }
    
            return session()->flash('message', __('auth.password'));
        }
        
        session()->flash('message', __('auth.failed'));
    }

    public function render() {
        return view('livewire.login');
    }
}
