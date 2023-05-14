<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SP_Imanager extends Model
{
    protected $connection = 'SP';   
    protected $table = 'plan_progresses';
}
