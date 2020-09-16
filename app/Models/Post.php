<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Table Name

    protected $table = 'posts';

    // Primary key

    public $primaryKey ='id';
    // Timestamp
    public $timestamps = true;
}
