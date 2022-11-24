<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\MempService;
use App\Models\Mempractice;

class MempController extends Controller{
    private $mempService;

    public function __construct(MempService $mempService){
        $this->mempService =$mempService;
    }
    public function getunitNum(Request $req){
        return $this->mempService->getunitNum($req);
    }
    public function getAvgbyDay(Request $req){
        return $this->mempService->getAvgbyDay($req);
    }
    public function getAvgIBC(Request $req){
        return $this->mempService->getAvgIBC($req);
    }
    public function getAllavgDate(Request $req){
        return $this->mempService->getAllavgDate($req);
    }
    public function getcompletion(Request $req){
        return $this->mempService->getcompletion($req);
    }
    public function getTimes(Request $req){
        return $this->mempService->getTimes($req);
    }
}