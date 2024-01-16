<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index ()
    {
        $data = Certificate::orderBy('order_by', 'asc')->get();
        return view('front.certificates' , compact('data'));
    }
}
