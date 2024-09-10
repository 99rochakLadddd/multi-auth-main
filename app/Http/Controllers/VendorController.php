<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function showVendor() {
        return view('vendor.vendor-dashboard');
    }
}
