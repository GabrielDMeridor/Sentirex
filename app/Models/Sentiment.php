<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentiment extends Model
{
    use HasFactory;

    protected $table = 'sentiments'; // Specify the table name if different from pluralized model name

    protected $fillable = [
        'user_id', // Add any other columns you want to be mass assignable
        'type',
        'comment',
    ];
}
