<?php

namespace App\Features\Demo\Controllers;

use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function __construct()
    {
        // Add your middleware, if needed.
    }

    public function index()
    {
        return flame();
    }
}
