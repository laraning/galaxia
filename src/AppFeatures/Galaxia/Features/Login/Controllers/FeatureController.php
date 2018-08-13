<?php

namespace App\Galaxia\Features\Login\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Galaxia\Features\Login\Requests\LoginRequest;

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
        return Auth::guard(glxguard());
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
