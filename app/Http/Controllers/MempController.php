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
}