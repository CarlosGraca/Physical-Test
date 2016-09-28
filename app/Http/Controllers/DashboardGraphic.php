<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Test;
use App\Sheet;

class DashboardGraphic extends Controller
{
    //
    public function getData(Request $request)
    {
      # code...
      $startDate = $request->input('startDate');
      $endDate = $request->input('endDate');

    //  echo $request->input('startDate');
    //  echo $endDate;

      $tests = Test::select(\DB::raw('MONTHNAME(created_at) as month'), \DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"), DB::raw('count(*) as test_count'))
      ->whereBetween('created_at', [$startDate, $endDate])->groupBy(DB::raw("MONTHNAME(created_at)"))->groupBy(DB::raw("DATE_FORMAT(created_at,'%Y-%m')"))->get();

      $sheets = Sheet::select(\DB::raw('MONTHNAME(created_at) as month'), \DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"), DB::raw('count(*) as sheet_count'))
      ->whereBetween('created_at', [$startDate, $endDate])->groupBy(DB::raw("MONTHNAME(created_at)"))->groupBy(DB::raw("DATE_FORMAT(created_at,'%Y-%m')"))->get();

      $dados = Test::select(\DB::raw('MONTHNAME(tests.created_at) as month'), \DB::raw("DATE_FORMAT(tests.created_at,'%Y-%m') as monthNum"), DB::raw('count(*) as test_count'))
      ->whereBetween('tests.created_at', [$startDate, $endDate])->groupBy(DB::raw("MONTHNAME(tests.created_at)"))->groupBy(DB::raw("DATE_FORMAT(tests.created_at,'%Y-%m')"))
       ->join('sheets',DB::raw("DATE_FORMAT(tests.created_at,'%Y-%m')"), '=', DB::raw("DATE_FORMAT(sheets.created_at,'%Y-%m')"))->get();

    //  $tests = DB::select("select MONTHNAME(dt_test) as month, DATE_FORMAT(dt_test,'%Y-%m') as monthNum, count(tests.id) as test_count from `tests` group by DATE_FORMAT(dt_test,'%Y-%m'), MONTHNAME(dt_test)");
    //  $sheets = DB::select("select MONTHNAME(created_at) as month, DATE_FORMAT(created_at,'%Y-%m') as monthNum, count(sheets.id) as sheet_count from `sheets` group by DATE_FORMAT(created_at,'%Y-%m'), MONTHNAME(created_at)");

      $data = ['tests'=>$tests,'sheets'=>$sheets,'dados'=>$dados];

      return $data;
    }
}
