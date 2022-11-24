<?php

namespace App\Service;
use App\Repository\UnitRepository;

class unitService{
    private $unitRepository;
    public function __construct(UnitRepository $unitRepository){
        $this->unitRepository=$unitRepository;
    }
    public function struAllcount(){
        $res=$this->unitRepository->struAllcount();
        return $res;
    }
}