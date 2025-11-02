<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    //
    protected $table = 'crud_info';

    protected $fillable = [
        'user_id',
        'subject',
        'content',
    ];
}
