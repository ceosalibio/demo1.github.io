<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SQCImanager extends Model
{
    use HasFactory;
    protected $connection = 'SQC';
    protected $table = 'sqc_data_control';
}
