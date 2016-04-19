<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    protected $table ="blacklist";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = ['user_id', 'isblocked'];
}
