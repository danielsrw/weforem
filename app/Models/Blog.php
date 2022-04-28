<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = ['title', 'image', 'author', 'status', 'description'];
    protected $primaryKey = 'id';
    public $timestamp = true;
}
