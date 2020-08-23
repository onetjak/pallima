<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = [];
    protected $primarykey = 'id';
    protected $timestamp = 'true';
    protected $filable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
