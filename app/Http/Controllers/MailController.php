<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Test;

class MailController extends Controller
{
      public function sendTestReport(Request $request){

        $id = $request->input('id');
        $attachment = $request->input('data');

        if(!empty($attachment)){
            $data = base64_decode($attachment);
            $fname = "attachments/test_report.pdf"; // name the file
            file_put_contents($fname, $data );
          } else {
            echo "No Data Sent";
          }

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
          $document = 'Test';

          Mail::send('report.template',compact('clients','document'), function($message) use ($clients,$fname)
          {
            //  $message->from('ailtonsemedo.2006@gmail.com');
            $message->to($clients[0]->email,$clients[0]->name)->subject('Ficha de Avaliação Física');
            $message->attach($fname);
          });

          if(count(Mail::failures()) > 0){
              $message = ['message'=>'Failed to send report to email, please try again.','type'=>'error'];
          }else{
              $message = ['message'=>'Message report send with success.','type'=>'success'];
          }
          return $message;
      }

      //create new function to send HTML email
      public function html_email(){
      /*  $data=['name'=>'Harison matondang'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('harisonmatondang@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with HTML Email');
            $message->from('nabilaauliaputri29@gmail.com','Nabila');
        });
        echo 'HTML Email was sent!';*/
      }

      //create new function to send mail with attachment Mail
        public function attachment_email(){
        /*  $data=['name'=>'Harison matondang'];
          Mail::send(['text'=>'mail'], $data, function($message){
              $message->to('harisonmatondang@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with HTML Email');
              // add attach here
              // i have a image file on Laravel project
            //  $message->attach('C:serverhtdocshckrcompublicuploadsharison.jpg');
              //$message->attach('C:serverhtdocshckrcompublicuploadssector-code.jpg');
              $message->from('nabilaauliaputri29@gmail.com','Nabila');
          });
          echo 'HTML Email was sent!';*/
        }

    public function sendMail()
    {
      /*Mail::send('[]',['data'=>$data], function ($mail) use ($data)
      {
          $mail->to($data['email'],$data['name'])->from('everyone@gmail.com')->subject('Welcome');
      });*/
    }
}
