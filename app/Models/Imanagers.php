<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imanagers extends Model
{
    use HasFactory;
    protected $connection = 'PlanApplication';
    protected $table = 'alvs_copy';
}
