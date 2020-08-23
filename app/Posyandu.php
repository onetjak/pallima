<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    protected $table = 'posyandu';
    protected $guarded = [];
    protected $primarykey ='id';
    protected $timestamp ='true';
}
