<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus';
    protected $guarded = [];
    protected $primarykey = 'id';
    protected $timestamp = 'true';
}
