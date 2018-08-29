<?php

namespace App\Galaxia\Features\Home\Controllers;

use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('galaxia-authenticate');
    }

    public function index()
    {
        return flame();
    }
}
