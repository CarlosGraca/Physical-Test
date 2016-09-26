<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TestRequest;
use App\Test;
use Mail;

class TestController extends Controller
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

        $tests = Test::all();
        if (Request::wantsJSON()){
           return $tests;
        }else{
            return view('tests.index',compact('tests'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        $test = Test::create($request->all());
        //\Session::flash('flash_message','Test successfully added.'); //<--FLASH MESSAGE

        if (Request::wantsJson()){
            return $test;
        }else{
             return view('tests.create');
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
      if (Request::wantsJson()){
          return $tests;
      }else{
        //  return view('clients.show',compact('client'));
      }
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
        // delete
        $test = Test::find($id);
        $test->delete();
    }

    public function test_report($id)
    {
      $clients = DB::table('tests')
               ->select('clients.name','clients.dt_nasc','clients.sexo','tests.dt_test','clients.telemovel','clients.email')
               ->where('tests.id',$id)
               ->join('clients','tests.client_id','=','clients.id')
               ->TAKE(1)->get();

      $item_name = [
          'estatura'=>'Estatura (cm)','peso'=>'Peso (kg)','imc'=>'IMC kg/m²','dc_tricepts'=>'DC Tríceps (mm)','soma_dc_triceps_subescapular'=>'Soma DC Tríceps + Subescapular (mm)','soma5_dc'=>'Soma 5 DC (mm)','circunferencia'=>'Circunferência: Busto (cm)','cintura'=>'Cintura  (cm)','quadril'=>'Quadril  (cm)','coxa'=>'Coxa (cm)','panturrilha'=>'C. Panturrilha (cm)','rel_cin_qua'=>'Relação Cintura/Quadril',
          'gordura'=>'% de Gordura','peso_gordura'=>'Peso da gordura (kg)','massa_magra'=>'Peso da massa magra (kg)','peso_corporal_total'=>'Peso Corporal Total (kg)','peso_a_perder'=>'Peso a Perder (kg)','total_agua_corpo'=>'Total de água do corpo (litros)','perc_agua_massa_magra'=>'% de água da massa magra (litros)','taxa_metabolica'=>'Taxa metabóloca basal (Calorias/Dia)','frequencia_card_rep'=>'Frequência Cardíaca Repouso (bpm)',
          'pressao_sis'=>'Pressão Arterial Sistólica (mmHg)','pressao_dis'=>'Pressão Arterial Diastólica (mmHg)','potencia_aerobica'=>'Potência Aeróbica (ml/Kg/min)','forca_abdominal'=>'Força Abdominal (nº rep/1min)','forca_mmii'=>'Força MMII (IVC cm)','flexibilidade'=>'Flexibilidade (cm)','forca_mmss'=>'Força MMSS (nº de repetições)'
      ];

      $test = Test::find($id);

      $show = true;


      return view('tests.test_report',compact('clients','item_name','test','show'));
    }

    public function sendMail($id)
    {
      $clients = DB::table('tests')
               ->select('clients.name','clients.dt_nasc','clients.sexo','tests.dt_test','clients.telemovel','clients.email')
               ->where('tests.id',$id)
               ->join('clients','tests.client_id','=','clients.id')
               ->TAKE(1)->get();

      $email = $clients[0]->email;

      $item_name = [
          'estatura'=>'Estatura (cm)','peso'=>'Peso (kg)','imc'=>'IMC kg/m²','dc_tricepts'=>'DC Tríceps (mm)','soma_dc_triceps_subescapular'=>'Soma DC Tríceps + Subescapular (mm)','soma5_dc'=>'Soma 5 DC (mm)','circunferencia'=>'Circunferência: Busto (cm)','cintura'=>'Cintura  (cm)','quadril'=>'Quadril  (cm)','coxa'=>'Coxa (cm)','panturrilha'=>'C. Panturrilha (cm)','rel_cin_qua'=>'Relação Cintura/Quadril',
          'gordura'=>'% de Gordura','peso_gordura'=>'Peso da gordura (kg)','massa_magra'=>'Peso da massa magra (kg)','peso_corporal_total'=>'Peso Corporal Total (kg)','peso_a_perder'=>'Peso a Perder (kg)','total_agua_corpo'=>'Total de água do corpo (litros)','perc_agua_massa_magra'=>'% de água da massa magra (litros)','taxa_metabolica'=>'Taxa metabóloca basal (Calorias/Dia)','frequencia_card_rep'=>'Frequência Cardíaca Repouso (bpm)',
          'pressao_sis'=>'Pressão Arterial Sistólica (mmHg)','pressao_dis'=>'Pressão Arterial Diastólica (mmHg)','potencia_aerobica'=>'Potência Aeróbica (ml/Kg/min)','forca_abdominal'=>'Força Abdominal (nº rep/1min)','forca_mmii'=>'Força MMII (IVC cm)','flexibilidade'=>'Flexibilidade (cm)','forca_mmss'=>'Força MMSS (nº de repetições)'
      ];

      $test = Test::find($id);
      $show = false;

        Mail::send('tests.test_report',compact('clients','item_name','test','show'),function ($message) use ($email)
        {
        //  $message->from('ailtonsemedo.2006@gmail.com');
          $message->to($email)->subject('Ficha de Avaliação Física');
        });
    }

    public function downloadPDF($id)
    {

        $clients = DB::table('tests')
                 ->select('clients.name','clients.dt_nasc','clients.sexo','tests.dt_test','clients.telemovel','clients.email')
                 ->where('tests.id',$id)
                 ->join('clients','tests.client_id','=','clients.id')
                 ->TAKE(1)->get();

        $item_name = [
            'estatura'=>'Estatura (cm)','peso'=>'Peso (kg)','imc'=>'IMC kg/m²','dc_tricepts'=>'DC Tríceps (mm)','soma_dc_triceps_subescapular'=>'Soma DC Tríceps + Subescapular (mm)','soma5_dc'=>'Soma 5 DC (mm)','circunferencia'=>'Circunferência: Busto (cm)','cintura'=>'Cintura  (cm)','quadril'=>'Quadril  (cm)','coxa'=>'Coxa (cm)','panturrilha'=>'C. Panturrilha (cm)','rel_cin_qua'=>'Relação Cintura/Quadril',
            'gordura'=>'% de Gordura','peso_gordura'=>'Peso da gordura (kg)','massa_magra'=>'Peso da massa magra (kg)','peso_corporal_total'=>'Peso Corporal Total (kg)','peso_a_perder'=>'Peso a Perder (kg)','total_agua_corpo'=>'Total de água do corpo (litros)','perc_agua_massa_magra'=>'% de água da massa magra (litros)','taxa_metabolica'=>'Taxa metabóloca basal (Calorias/Dia)','frequencia_card_rep'=>'Frequência Cardíaca Repouso (bpm)',
            'pressao_sis'=>'Pressão Arterial Sistólica (mmHg)','pressao_dis'=>'Pressão Arterial Diastólica (mmHg)','potencia_aerobica'=>'Potência Aeróbica (ml/Kg/min)','forca_abdominal'=>'Força Abdominal (nº rep/1min)','forca_mmii'=>'Força MMII (IVC cm)','flexibilidade'=>'Flexibilidade (cm)','forca_mmss'=>'Força MMSS (nº de repetições)'
        ];

        $test = Test::find($id);
        $show = false;

       $pdf = \PDF::loadView('tests.test_report',compact('clients','item_name','test','show'))->setPaper('a4', 'portrait')->setWarnings(false);
       return $pdf->stream();//download('final_test.pdf');
    }

    public function downloadHTMLtoPDF(TestRequest $request)
    {
        $html = $request['html'];
        $pdf = \PDF::loadHTML($html)->setPaper('a4', 'portrait')->setWarnings(false)->save('final_test.pdf');
        return $pdf->download('final_test.pdf');
    }

}
