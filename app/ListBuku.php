<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListBuku extends Model
{
    use SoftDeletes;

    public  $timestamps = true;
    protected $table    = 'list_buku';
    protected $guarded  = [];
}
