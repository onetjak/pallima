<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepala_Keluarga extends Model
{
    protected $table = 'kepala_keluarga';
    protected $guarded = [];
    protected $primarykey ='id';
    protected $timestamp ='true';
}
