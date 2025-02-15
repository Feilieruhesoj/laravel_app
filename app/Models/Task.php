<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Define the table name explicitly (optional)
    protected $table = 'tasks';

    // Define fillable fields to allow mass assignment
    protected $fillable = ['title', 'description', 'is_completed'];
}
