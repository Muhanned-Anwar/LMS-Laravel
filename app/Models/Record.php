<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $fillable = [
        'Book_ID',
        'Student_ID',
        'Collection_Date',
        'Expired_Date',
        'Submission_Status',
        'Submission_Date',
        'Read',
    ];

    // Add any additional model logic or relationships here
}
