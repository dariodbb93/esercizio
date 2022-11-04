<?php

namespace App\Models;
use App\Models\Projects;
use App\Models\dev;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use App\Models\Admin;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['ceo', 'teamMember', 'admin_id'];

// funzione di relazione tra il modello  team ed il modello dev one to many //


    public function devs(){

        return $this->hasMany(dev::class);
    }


    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    
    }

    public function projects(){

        return $this->hasMany(Project::class);
    }






}



