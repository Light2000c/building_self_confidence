<?php

namespace App\Http\Controllers\profile;


use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrackProgressController extends Controller
{
    public function index()
    {

       $results =  Quiz::whereBelongsTo(Auth::user())->paginate(7);

        return view("profile.trackProgress", [
            "results" => $results
        ]);
    }
}
