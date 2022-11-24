<?php

namespace App\Repository;
use Illuminate\Support\Facades\DB;
// use \Illuminate\Database\Query\Builder;
use App\Models\Mempractice;
// use App\Models\Unit;

class MempRepository{
    public function getunitNum($memberid,$kindid){
        $res = Mempractice :: select('memberId','unitId','kindId')->distinct('unitId')->where('memberId',$memberid)->where('kindId',$kindid)->count();
        return $res;
    }
    public function getAvgbyDay($memberid){
        $res=Mempractice::select('memberId')->where('memberId',$memberid)->select(DB::raw(' avg(practiceScore) as avg, practiceDate as date'))->groupby('practiceDate')->orderby('practiceDate','DESC')->offset(0)->limit(7)->get();
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getavgIBC($memberid,$kindid){
        $res = Mempractice ::join('unit','unit.unitId','=','mempractice.unitId') 
        ->select(DB::raw('avg(mempractice.practiceScore) as avg , mempractice.practiceDate as date,unit.structureId,mempractice.kindId'))->groupby('mempractice.practiceDate')->groupby('mempractice.kindId')->groupby('unit.structureId')->orderby('mempractice.practiceDate')
        ->where('mempractice.memberId',$memberid)->where('kindId',$kindid)->get();
        return $res;
    }
    public function getAllavgDate($memberid){
        $res = Mempractice ::join('unit','unit.unitId','=','mempractice.unitId') 
        ->select(DB::raw('avg(mempractice.practiceScore) as avg , mempractice.practiceDate as date'))->groupby('mempractice.practiceDate')
        ->where('mempractice.memberId',$memberid)->get();
        return $res;
    }
    public function getcompletion ($re){
        $req = DB :: select(DB::raw('SELECT s.structureId,count(s.structureId) as count
        from (SELECT distinct A.unitId, A.memberId,B.structureId,A.kindId FROM db_mrabc.mempractice as A 
        inner join db_mrabc.unit as B on A.unitId=B.unitId 
        where A.memberId=? And A.kindId=?) as s 
        group by s.structureId;
        '),[$re->memberId,$re->kindId]);
        return $req;
    }
    public function getTimes($req){
        $res = Mempractice :: select(DB::raw('practiceDate,count(practiceDate) as count'))->where('memberId',$req)->groupby('practiceDate')->orderby('practiceDate','DESC')->offset(0)->limit(7)->get();
        // $times = $res -> orderby('DESC');
        return $res;
    }
    
}