<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profil extends Model
{
    protected $table = 'profil';
    protected $guarded = [];
    protected $primarykey ='id';
    protected $timestamp ='true';

    public function hapusCover()
    {
        Storage::delete($this->struktur);
    }
}
