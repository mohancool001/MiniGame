<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $table ="userlevel";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = ['user_id', 'level', 'timest','solved'];
}
