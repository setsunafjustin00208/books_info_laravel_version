<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_name','author','description','publication_date_n_time  ','email','description','tags'];
    use HasFactory;
}
