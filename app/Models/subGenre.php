<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subGenre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'genre_id',
        'name',
        'description'
    ];
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function book(){
        return $this->belongsTo(Book::class,'subGenre_id');
    }
}
