<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seki_im_v1 extends Model
{
    use HasFactory;

    protected $connection ='OPTION';
    protected $table = 'seki_im_v1';
    public $timestamps = false;
}
