<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
     // ✅ Add this to allow mass assignment
    protected $fillable = ['title', 'status', 'user_id'];

}
