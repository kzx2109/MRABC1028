<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    protected $table ='diary';

    public $timestamps = false;

    protected $primarykey ='diaryId';
    // protected $foreignkey = 'memberId';

    protected $fillable =[
        'diaryId','diaryDate','diaryStar','diaryFeedback','memberId'
    ];
}
