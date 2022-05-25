<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    public function tages(){
        return $this->belongsToMany(Tage::class, 'post_tages','post_id','tage_id');
    }
}
