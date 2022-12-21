<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:dashboard-C', ['only' => ['index','list','show']]);
        $this->middleware('permission:dashboard-R', ['only' => ['create','store']]);
        $this->middleware('permission:dashboard-U', ['only' => ['edit','update']]);
        $this->middleware('permission:dashboard-D', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('adm.dashboard', [
            'data' => $data,
        ]);
    }

    public function list(Request $request)
    {

    }
}
