<?php
namespace App\Service;
use App\Repository\DiaryRepository;

class diaryService{
    private $diaryRepository;
    public function __construct(DiaryRepository $diaryRepository){
        $this->diaryRepository =$diaryRepository;
    }
    public function getDiary($req){
        $res = $this->diaryRepository->getDiary($req->memberId,$req->diaryDate);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getFeedback($req){
        $res = $this->diaryRepository->getFeedback($req->memberId,$req->diaryDate);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function getStar($req){
        $res = $this->diaryRepository->getStar($req->memberId,$req->diaryDate);
        if($res){
            return $res;
        }else{
            return 0;
        }
    }
    public function updateFeedback($req){
        $res = $this->diaryRepository->updateFeedback($req);
        if($res){
            return $res;
        }else{
            return "fail";
        }
    }
    public function getdiaryData($req){
        $res = $this->diaryRepository->getdiaryData($req->memberId,$req->diaryDate);
        if($res){
            return $res;
        }else{
            return "fail";
        }
    }
    public function insertdiary($req){
        $res=$this->diaryRepository->insertdiary($req);
        if($res){
            return "success";
        }
        else{
            return "fail";
        }
    }
}