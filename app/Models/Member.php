<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table ='member';

    public $timestamps = false;

    // protected $primarykey = 'memberId';
    protected $primarykey ='memberId';

    protected $fillable =[
        'memberId','memberAccount','memberPassword','memberGender','memberEmail','memberTitle','memberDCount','memberDContinue'
    ];
}
