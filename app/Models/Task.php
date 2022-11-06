<?php

namespace App\Models;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['taskTitle', 'taskDescription', 'status', 'project_id'];



    public function project(){
        return $this->belongsTo(Projects::class, 'project_id', 'id');


}


}

