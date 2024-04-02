<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Models\ExerciseResult;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExerciseResultController extends Controller
{
    public function index()
    {
       $exerciseResults =  ExerciseResult::whereBelongsTo(Auth::user())->paginate(7);

        return view("profile.exerciseResult", [
            'exerciseResults' => $exerciseResults,
        ]);

    }
}
