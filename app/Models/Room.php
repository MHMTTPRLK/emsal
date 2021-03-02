<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=['name','description','status'];


    public function messages()
    {
        return $this->hasOne('App\Models\Message');
    }

    public function my_messages()
    {
        return $this->hasMany('App\Models\Message')->where('user_id',auth()->user()->id);
    }
}
