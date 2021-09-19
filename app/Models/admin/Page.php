<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'url',
        'title',
        'futureImg',
        'content',
    ];
}
