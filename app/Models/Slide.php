<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slides';
    protected $fillable = ['title', 'subtitle', 'image', 'status', 'description'];
    protected $primaryKey = 'id';
    public $timestamp = true;
}
