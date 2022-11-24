<?php
 namespace App\Repository;
 use Illuminate\Support\Facades\DB;

 use App\Models\Unit;

 class UnitRepository{
    public function struAllcount(){
        $res = Unit ::select(DB::raw('structureId,count(*) as count'))->groupby('structureId')->get();
        return $res;
    }
 }