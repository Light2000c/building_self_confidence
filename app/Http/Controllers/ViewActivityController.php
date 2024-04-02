<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ViewActivityController extends Controller
{
    public function index(Exercise $exercise)
    {
        $recentExercises = Exercise::take(4)->get();

        return view("viewActivity", [
            'exercise' => $exercise,
            'recentExercises' => $recentExercises
        ]);
    }

    public function store(Exercise $exercise, Request $request)
    {

        if ($request->has("image")) {

            $this->validate($request, [
                'image' => 'required',
                'feedback' => 'required',
            ]);

            $filename = time() . '.' . $request->image->guessExtension();

            $upload = $request->image->move("feedback", $filename);
            // $upload = Storage::putFileAs('public', $request->image, $filename);

            if (!$upload) {
             return back()->with("error", "Something went wrong please try again.");
            }

           $save = $request->user()->exerciseResult()->create([
                "file" => $filename,
                "exercise_id" => $exercise->id,
                "feedback" => $request->feedback,
            ]);

            if(!$save){
                return back()->with("error", "Something went wrong please try again."); 
            }

            return back()->with("success", "Feedback has been successfully sent."); 

        } else {
            $this->validate($request, [
                'feedback' => 'required',
            ]);


          $save = $request->user()->exerciseResult()->create([
                "exercise_id" => $exercise->id,
                "feedback" => $request->feedback,
            ]);

            if(!$save){
                return back()->with("error", "Something went wrong please try again."); 
            }

            return back()->with("success", "Feedback has been successfully sent."); 
        }
    }
}
