<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;

use App\Models\Mempractice;

class MempRepository{
    public function getunitNum($memberid,$kindid){
        $res = Mempractice :: select('memberId','unitId','kindId')->distinct('unitId')->where('memberId',$memberid)->where('kindId',$kindid)->count();
        // $count=$res-;
        // $res=DB::Select('SELECT distinct memberId ,  unitId ,kindId From mempractice where memberId = ? AND kindId = ? ',[$req->memberId,$req->kindId]);
        // $count = $res->count();
        return $res;
    }
}