<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $tale='<ten_bang>';
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'post_id');
    }
}
