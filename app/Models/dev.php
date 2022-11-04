<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dev extends Model
{
    use HasFactory;
    protected $fillable = ['nameDev', 'surnameDev', 'teamMember', 'team_id'];

// funzione di relazione inversa della one to many tra modello Team e modello dev


    public function team(){
        return $this->belongsTo(Team::class, 'team_id', 'id');


    }



}
