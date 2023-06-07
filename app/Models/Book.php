<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'Book_ID',
        'Book_Name',
        'Writer_Name',
        'Catagory',
        'Amounts',
        'Shelf_ID',
    ];

    // Add any additional model logic or relationships here
}
