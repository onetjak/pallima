<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    protected $guarded = [];

    protected $dates = [
        'tgl_publis',
        'create_at',
        'update_at',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function hapusCover()
    {
        Storage::delete($this->cover);
    }
}
