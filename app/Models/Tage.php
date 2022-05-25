<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tage extends Model
{
    use HasFactory;
    protected $table = 'tages';
    protected $guarded = [];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_tages','tage_id','post_id');
    }
}
