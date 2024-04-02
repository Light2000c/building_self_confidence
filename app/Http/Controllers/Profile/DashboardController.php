<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('profile.dashboard');
    }

    public function logout()
    {

        if (Auth::user()) {
            Auth::logout();
            return redirect("/home");
        }
    }
}
