<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kakouiraiplans_details extends Model
{
    use HasFactory;
    protected $connection = 'DenkiAfterkakou';
    protected $table ='Kakouiraiplans_details';
}
