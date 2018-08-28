<?php

namespace App\Galaxia\Features\Login\Controllers;

use App\Galaxia\Features\Login\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    public function __construct()
    {
    }

    public function show()
    {
        return flame();
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        return array_merge(
            $request->only('email', 'password')
        );
    }

    protected function guard()
    {
        return Auth::guard(glx_guard());
    }

    public function login(LoginRequest $request)
    {
        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();

            return redirect(route('galaxia.home'));
        } else {
            return redirect()->back()
                             ->withInput($request->only('email', 'remember'))
                             ->withErrors(['attempt' => trans('galaxia-text::login.credentials_invalid').'.']);
        }
    }
}
