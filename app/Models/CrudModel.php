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
}
