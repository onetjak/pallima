<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'sekolah';
    protected $guarded = [];
    protected $primarykey ='id';
    protected $timestamp ='true';
}
