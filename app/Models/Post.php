<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
    ];
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_cnt = 5){
        return $this->orderby('updated_at','DESC')->paginate($limit_cnt);
    }
}


