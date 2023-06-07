<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;

    protected $table = 'shelfs';

    protected $fillable = [
        'Shelf_ID',
        'Shelf_Location',
    ];

    // Add any additional model logic or relationships here
}
