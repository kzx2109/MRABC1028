<?php
namespace App\Repository;
use Illuminate\Support\Facades\DB;

use App\Models\Diary;

class DiaryRepository{
    public function getDiary($memberid,$diarydate){
        $res = Diary :: where('memberId',$memberid)->where('diaryDate',$diarydate)->first();
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getFeedback($memberid,$diarydate){
        $res = Diary ::select('diaryFeedback')-> where('memberId',$memberid)->where('diaryDate',$diarydate)->first();
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getStar($memberid,$diarydate){
        $res = Diary :: select('diaryStar')->where('memberId',$memberid)->where('diaryDate',$diarydate)->first();
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function updateFeedback($req){
        $res = Diary ::where('memberId','=',$req->memberId)->where('diaryDate','=',$req->diaryDate)->update([
            "diaryFeedback"=> $req->diaryFeedback
        ]);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getdiaryData($memberid,$diarydate){
        $res = Diary :: where('memberId',$memberid)->where('diaryDate',$diarydate)->get();
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
}