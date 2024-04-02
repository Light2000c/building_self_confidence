<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Quiz extends Component
{
    public $questions = array(
        "1" => "This is question 1",
        "2" => "This is question 2",
        "3" => "This is question 3",
        "4" => "This is question 4",
        "5" => "This is question 5",
        "6" => "This is question 6",
        "7" => "This is question 7",
        "8" => "This is question 8",
        "9" => "This is question 9",
        "10" => "This is question 10",
    );

    public $question;
    public $count = 1;
    public $score = 0;
    public $option1;
    public $option2;
    public $option3;
    public $option4;
    public $message = "";
    public $total = 0;

    public $stronglyAgree = 0;
    public $agree = 0;
    public $disagree = 0;
    public $stronglydisagree = 0;


    public function mount()
    {
        $this->question = $this->questions[$this->count];
    }



    public function render()
    {
        return view('livewire.quiz');
    }


    public function next()
    {

        $user = Auth::user();

        if ($this->count == 1 || $this->count == 2 ||  $this->count == 4 || $this->count == 6 || $this->count == 7) {
            $this->stronglyAgree = 3;
            $this->agree = 2;
            $this->disagree = 1;
            $this->stronglydisagree = 0;
        }

        if ($this->count == 3 || $this->count == 5 ||  $this->count == 8 || $this->count == 9 || $this->count == 10) {
            $this->stronglyAgree = 0;
            $this->agree = 1;
            $this->disagree = 2;
            $this->stronglydisagree = 3;
        }


        if ($this->option1 || $this->option2 ||  $this->option3 || $this->option4) {
            $this->message = "";
            if ($this->count < count($this->questions)) {

                if ($this->option1) {
                    $this->score += $this->stronglyAgree;
                } else if ($this->option2) {
                    $this->score += $this->agree;
                } else if ($this->option3) {
                    $this->score += $this->disagree;
                } else if ($this->option4) {
                    $this->score += $this->stronglydisagree;
                }

                $this->option1 = null;
                $this->option2 = null;
                $this->option3 = null;
                $this->option4 = null;

                $this->count += 1;
                $this->question = $this->questions[$this->count];
            } else {

                if ($this->option1) {
                    $this->score += $this->stronglyAgree;
                } else if ($this->option2) {
                    $this->score += $this->agree;
                } else if ($this->option3) {
                    $this->score += $this->disagree;
                } else if ($this->option4) {
                    $this->score += $this->stronglydisagree;
                }

                $this->option1 = null;
                $this->option2 = null;
                $this->option3 = null;
                $this->option4 = null;
                $this->total = $this->score;

                if($this->score <= 15){
                    
                    $user->quiz()->create([
                        "result" => $this->score,
                        "confidence_level" => "Low self-esteem"
                    ]);
                }

                if($this->score >= 15){
                    $user->quiz()->create([
                        "result" => $this->score,
                        "confidence_level" => "Normal"
                    ]);
                }

                return redirect()->route("dashboard");
            }
        } else {
            $this->message = "Please select an option to proceed to next question!";
        }
    }
}
