<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname'];

    public function team(){

        return $this->hasMany(Team::class, 'admin_id', 'id');
    }




}
