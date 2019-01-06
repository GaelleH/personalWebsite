<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //Table name
    protected $table = 'settings';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

}