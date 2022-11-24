<?php

namespace App\Service;
use App\Repository\MempRepository;

class mempService{
    private $mempRepository;
    public function __construct(MempRepository $mempRepository){
        $this->mempRepository=$mempRepository;
    }
    public function getunitNum($req){
        $res = $this->mempRepository->getunitNum($req->memberId,$req->kindId);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getAvgbyDay($req){
        $res = $this->mempRepository->getAvgbyDay($req->memberId);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getAvgIBC($req){
        $res = $this->mempRepository->getAvgIBC($req->memberId,$req->kindId);
        return $res;
    }
    public function getAllavgDate($req){
        $res = $this->mempRepository->getAllavgDate($req->memberId);
        return $res;
    }
    public function getcompletion($req){
        $res = $this->mempRepository->getcompletion($req);
        return $res;
    }
    public function getTimes($req){
        $res = $this->mempRepository->getTimes($req->memberId);
        return $res;
    }
}