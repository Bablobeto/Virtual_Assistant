<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
