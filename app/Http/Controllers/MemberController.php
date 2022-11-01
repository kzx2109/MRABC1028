<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\MemberService;
use App\Models\Member; 
class MemberController extends Controller
{
    private $memberService;

    public function __construct(MemberService $memberService){
        $this->memberService = $memberService;
    }
    
    public function getAllmembers(){
        return $this->memberService->getAllmembers();
    }
    public function getmemberId(Request $request){
        return $this->memberService->getmemberId($request);
    }
    public function getmemberData(Request $request){
        return $this->memberService->getmemberData($request);
    }
    public function updateEmail(Request $request){
        return $this->memberService->updateEmail($request);
    }
    public function updateGender(Request $request){
        return $this->memberService->updateGender($request);
    }
    public function updatePassword(Request $request){
        return $this->memberService->updatePassword($request);
    }
    public function getmemberPassword(Request $request){
        return $this->memberService->getmemberPassword($request);
    }
    public function insertMember(Request $req){
        return $this->memberService->insertMember($req);
    }
}
