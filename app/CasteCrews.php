<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasteCrews extends Model
{
    protected $table = 'caste_crew';
    protected $fillable = ['movie_id','member_id'];
}
