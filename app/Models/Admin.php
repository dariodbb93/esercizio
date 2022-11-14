<?php

namespace App\Models;

use App\Models\dev;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'team_id'];

    public function team()
    {

        return $this->belongsTo(Team::class);
    }



    public function dev(){
        return $this->hasMany(dev::class, 'admin_id', 'id');


    }







}
