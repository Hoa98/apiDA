<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanllenge extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'language',
        'link_figma',
        'level',
        'cate_chanllen_id'
    ];

}
