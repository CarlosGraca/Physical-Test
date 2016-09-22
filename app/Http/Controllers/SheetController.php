<?php

namespace App\Http\Controllers;

use Request;
use App\Sheet;
use App\Sheet_detail;
//use Illuminate\Http\Request;
use App\Http\Requests\SheetRequest;
use Illuminate\Support\Facades\DB;

//use App\Http\Requests;

class SheetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $sheets = Sheet::all();
        if (Request::wantsJSON()){
           return $sheets;
        }else{
          return view('sheets.index',compact('sheets'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biceps_antebraco = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'biceps-antebraco')
                          ->get();
        $triceps = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'triceps')
                          ->get();
        $ombro_trapesio = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'ombro-trapesio')
                          ->get();
        $peitoral = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'peitoral')
                          ->get();
        $costas = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'costas')
                          ->get();
        $abdmen = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'abdmen')
                          ->get();
        $quadril_perna_coxa = DB::table('exercises')
                          ->select('id','name')
                          ->where('type', 'quadril-perna-coxa')
                          ->get();
        return view('sheets.create',compact('biceps_antebraco','triceps','ombro_trapesio','peitoral','costas','quadril_perna_coxa','abdmen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SheetRequest $request)
    {
        $sheet = Sheet::create($request->all());

        //\Session::flash('flash_message','Sheet successfully added.'); //<--FLASH MESSAGE

        if (Request::wantsJson()){
            return $sheet;
        }else{             
             return view('sheets.create');             
        }
    }


   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Show the form for handout taining the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function handout_training($id)
    {
        $clients = DB::table('sheets')
                 ->select('objective','type_student','training_days','date_start','clients.name','email','dt_nasc')
                 ->where('sheets.id',$id)
                 ->join('clients','sheets.client_id','=','clients.id')
                 ->TAKE(1)->get();
        $biceps_antebraco = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','biceps-antebraco')  
                          ->get();
        $triceps = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','triceps')  
                          ->get();
        $ombro_trapezio = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','ombro-trapesio')  
                          ->get();
        $costas = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','costas')  
                          ->get();
        $peitoral = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','peitoral')  
                          ->get();
        $quadril_perna_coxa = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','quadril-perna-coxa')  
                          ->get();
        $abdomen = DB::table('exercises')                          
                           ->leftjoin('sheet_details', function($join) use ($id)
                            {
                                $join->on('exercises.id', '=', 'sheet_details.exercise_id')
                                     ->where('sheet_details.sheet_id', '=', $id);
                            })
                           ->select('exercises.id','exercises.name','sheet_details.ordem','sheet_details.serie','sheet_details.repet','sheet_details.map')
                           ->where('type','abdmen')  
                          ->get();   
        return view('sheets.handout_training', compact('biceps_antebraco','triceps','quadril_perna_coxa','abdomen','costas','peitoral','ombro_trapezio','clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
