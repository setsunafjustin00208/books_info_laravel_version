<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['f','author','description','publication_date_n_time','created_at','updated_at'];
    use HasFactory;
}
