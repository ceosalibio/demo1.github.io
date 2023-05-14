<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kakouiraiplans extends Model
{
    use HasFactory;
    protected $connection = 'DenkiAfterkakou';
    protected $table ='Kakouiraiplans';
}
