<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\User;

use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'content',
    ];


    public function user() {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function getTime() {
        return Carbon::create($this->created_at)->diffForHumans();
    }
}
