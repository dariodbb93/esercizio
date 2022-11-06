<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = ['nameProject', 'aboutProject', 'dateExipiration', 'team_id'];



    public function team(){
        return $this->belongsTo(Team::class, 'team_id', 'id');


    }

    public function task(){

        return $this->hasMany(Task::class);
    }



}
