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
}