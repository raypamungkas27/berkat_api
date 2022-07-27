<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ms_kategori extends Model
{
    use SoftDeletes;
    //
    protected $table = 'ms_kategori';
}
