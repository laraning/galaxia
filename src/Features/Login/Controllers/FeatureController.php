<?php

namespace Laraning\Galaxia\Features\Login\Controllers;

use App\Http\Controllers\Controller;

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
}
