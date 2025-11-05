<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CrudModel extends Model
{
    use HasFactory;
    
    //
    protected $table = 'crud_info';

    protected $fillable = [
        'user_id',
        'subject',
        'content',
    ];

    // user_id 를 이용해서 users의 name 을 가져오는 관계 설정
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
