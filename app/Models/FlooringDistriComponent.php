<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlooringDistriComponent extends Model
{
    use HasFactory;
    protected $connection = 'Flooring';
    protected $table = 'main_test';
}
