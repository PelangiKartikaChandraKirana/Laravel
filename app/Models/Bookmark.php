<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $table = 'bookmarks';
    protected $primaryKey = 'bookmark_id';
    protected $fillable = [
        'pengguna_id',
        'lembaga_id',
    ];


}