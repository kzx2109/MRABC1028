<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UnitService;
use App\Models\Unit;

class UnitController extends Controller{
    private $unitService;

    public function __construct(UnitService $unitService){
        $this->unitService =$unitService;
    }
    public function struAllcount(){
        return $this->unitService->struAllcount();
    }
}