<?php

namespace Laraning\Galaxia\Features\Login\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function __construct()
    {
        // Add your middleware, if needed.
    }

    public function show()
    {
        return flame();
    }

    public function login(Request $request)
    {
    }
}
