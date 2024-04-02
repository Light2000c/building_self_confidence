<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index(){

        $exercises = Exercise::paginate(6);
    
        return view("activities", [
            'exercises' => $exercises,
        ]);
    }
}
