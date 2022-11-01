<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\DiaryService;
use App\Models\Diary;

class DiaryController extends Controller
{
    private $diaryService;

    public function __construct(DiaryService $diaryService){
        $this->diaryService = $diaryService;
    }
    public function getDiary(Request $req){
        return $this->diaryService->getDiary($req);
    }
    public function getFeedback(Request $req){
        return $this->diaryService->getFeedback($req);
    }
    public function getStar(Request $req){
        return $this->diaryService->getStar($req);
    }
    public function updateFeedback(Request $req){
        return $this->diaryService->updateFeedback($req);
    }
    public function getdiaryData(Request $req){
        return $this->diaryService->getdiaryData($req);
    }
}