<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['judul', 'harga', 'deskripsi', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User\User::class);
    }

    public function takenBy(){
        return $this->belongsToMany(User\User::class, 'course_user')->withPivot('user_id', 'course_id');
    }
}
