<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
   

    protected $table = 'todos';
    protected $fillable = ['id','title', 'created_at','updated_at'];


}

