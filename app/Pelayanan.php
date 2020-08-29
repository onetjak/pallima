<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'pelayanan';
    protected $guarded = [];
    protected $primarykey ='id';
    protected $timestamp ='true';
}
