<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('fe.index');
    }

    public function about() {
        return view('fe.about');
    }

    public function gallery() {
        return view('fe.gallery');
    }

    public function news() {
        return view('fe.news');
    }

    public function detail_news() {
        return view('fe.detail_news');
    }

    public function contact() {
        return view('fe.contact');
    }
}
