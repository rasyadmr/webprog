<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $dates = ['publish_date']; // Casting the publish date to a Carbon instance

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
