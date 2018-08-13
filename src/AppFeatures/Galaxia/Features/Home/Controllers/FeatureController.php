<?php

namespace App\Galaxia\Features\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('galaxia-authenticate');
        //$this->middleware('galaxia-permission:access');
    }

    public function index()
    {
        return flame();
    }
}
