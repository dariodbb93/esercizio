<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dev extends Model
{
    use HasFactory;
    protected $fillable = ['nameDev', 'surnameDev', 'teamMember', 'team_id', 'admin_id'];




    public function team(){
        return $this->belongsTo(Team::class);


    }

    public function admin (){
        return $this->belongsTo(Admin::class, 'admin_id', 'id');


    }







}
