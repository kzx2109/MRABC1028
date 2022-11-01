<?php
namespace App\Service;
use App\Repository\MemberRepository;

class memberService{
    private $memberRepostory;
    public function __construct(MemberRepository $memberRepostory){
        $this->memberRepository = $memberRepostory;
    }
    public function getAllmembers(){
        $members = $this->memberRepository->getAllmembers();
        return $members;
    }
    public function getmemberId($request){
        $res =$this->memberRepository->getmemberId($request->memberAccount,$request->memberPassword);
        if($res){
            return $res;
        }
    }
    public function getmemberData($request){
        $res = $this->memberRepository->getmemberData($request->memberId);
        // $res = $this->memberRepository->getmemberData($request);
        if($res){
            return $res;
        }
    }
    // public function updatememberData($request){
    //     $res =$this->memberRepository->updatememberData($request);
    //     if($res){
    //         return "success";
    //     }else{
    //         return "fail";
    //     }
    // }
    public function updateEmail($request){
        $res = $this->memberRepository->updateEmail($request);
        if($res){
            return $res;
        }else{
            return "fail";
        }
    }
    public function updateGender($request){
        $res = $this->memberRepository->updateGender($request);
        if($res){
            return $res;
        }else{
            return "fail";
        }
    }
    public function updatePassword($request){
        $res = $this->memberRepository->updatePassword($request);
        if($res){
            return $res;
        }else{
            return "fail";
        }
    }
    public function getmemberPassword($request){
        $res = $this->memberRepository->getmemberPassword($request->memberId);
        if($res){
            return $res;
        }
    }
    public function insertMember($req){
        $res = $this->memberRepository->insertMember($req);
        if($res){
            return "success";
        }else{
            return "fail";
        }
    }
}