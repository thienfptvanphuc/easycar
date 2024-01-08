<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('fe/pages/home');
    }
    public function aboutus() {
        return view('fe/pages/aboutus');
    }
    public function contactus() {
        return view('fe/pages/contactus');
    }
}
