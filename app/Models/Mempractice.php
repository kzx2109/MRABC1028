<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mempractice extends Model
{
    use HasFactory;
    protected $table = 'mempractice';

    public $timestamps = false;

    protected $primarykey = 'practiceId';

    protected $fillable = ['practiceId','memberId','unitId','textId','practiceDate','practiceScore','kindId'];
}
