<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExerciseResult extends Model
{
    use HasFactory;


    protected $fillable = [
        "user_id",
        "file",
        "feedback",
        "exercise_id"
    ];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function exercise(){
        return  $this->belongsTo(Exercise::class);
    }
}
