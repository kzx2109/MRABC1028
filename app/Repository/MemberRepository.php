<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

use App\Models\Member;

class MemberRepository{
    public function getAllMembers(){
        $ret = DB::select('SELECT * From member');
        return $ret;
    }
    public function getmemberId($account,$password){
        // $res = DB::select('SELECT memberId From member Where memberAccount = ? AND memberPassword = ?'
        //             , [$request->memberAccount ,$request->memberPassword]);
        $res = Member :: select("memberId")->where("memberAccount",$account)->where("memberPassword",$password)->get();
        return $res;
    }
    public function getmemberData($id){
        $res = Member::where("memberId",$id)->first();
        // $res = DB::select('SELECT * From member where memberId = ?',[$request->memberId]);
        return $res;
    }
    public function updateEmail($request){
        $res = Member::where('memberId','=',$request->memberId)->update([
            "memberEmail" => $request->memberEmail
        ]);
        return $res;
    }
    public function updateGender($request){
        $res = Member::where('memberId','=',$request->memberId)->update([
            "memberGender" => $request->memberGender
        ]);
        return $res;
    }
    public function updatePassword($request){
        $res = Member::where('memberId','=',$request->memberId)->update([
            "memberPassword" =>$request->memberPassword
        ]);
        return $res;
    }
    public function getmemberPassword(int $id){
        $res = Member ::select('memberpassword')->where("memberId",$id)->get();
        return $res;
    }
}
