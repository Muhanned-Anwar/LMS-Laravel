<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'Student_ID',
        'Name',
        'Session',
        'Contact_no',
        'Email',
        'Image',
        'Username',
        'Password',
        'Verify',
        'Confirmation_Code',
        'Read',
    ];

    // Add any additional model logic or relationships here
}
