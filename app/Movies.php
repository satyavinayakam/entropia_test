<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['movie','release_date','thumbnail','trailer_url','producer_id'];
}
