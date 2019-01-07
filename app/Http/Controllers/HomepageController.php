<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomepageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $settings = Setting::orderBy('created_at', 'desc')->paginate(1);
        return view('Home.index')->with('settings', $settings);
    }
}
