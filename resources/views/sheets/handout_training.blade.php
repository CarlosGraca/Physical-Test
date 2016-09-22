@extends('layouts.report')

@section('main-content')

<!-- Main content -->
    <section class="invoice">
       <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="#" id="print-page" onclick="window.print();" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>              
            </div>
        </div>
        <!-- title row -->
	    <div class="row">
	        <div class="col-xs-12">
	          <h2 class="page-header">
	            <img src="/img/logo.png" width="150" alt="" > 
	            <small class="pull-right"><strong style="text-align: center;">Ficha de Treino</strong></small>
	          </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
           
	        <div class="col-sm-4 invoice-col">
	          <address>
	            <b>Nome: </b>{{$clients[0]->name}}<br>
	            <b>Data de nacimento: </b>{{$clients[0]->dt_nasc}}<br>
	          </address>
	        </div><!-- /.col -->
	        <div class="col-sm-4 invoice-col">
	          <address>
	            <b>Aluno: </b>{{$clients[0]->type_student}}<br>
	            <b>Objetivos: </b>{{$clients[0]->objective}}<br>
	          </address>
	        </div><!-- /.col -->
	        <div class="col-sm-4 invoice-col">
	          <b>Dias de treino: </b>{{$clients[0]->training_days}}<br>
	          <b>Data de Inicio: </b>{{$clients[0]->date_start}}<br>
	        </div><!-- /.col -->
        </div><!-- /.row -->
	   <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-xs" class="tabela-sheet" id="table-biceps-antebraco">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Biceps e Antebraço</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($biceps_antebraco as $element)
                              <tr>
                                  <td>{{$element->ordem}}</td>
                                  <td>{{$element->name}}</td>
                                  <td>{{$element->serie}}</td>
                                  <td>{{$element->repet}}</td>
                                  <td>{{$element->map}}</td>
                              </tr>	    
                        @endforeach           
	                </tbody>                                     
	            </table>
            </div>
        </div>
	    <div class="row">
	        <div class="col-xs-12 table-responsive">
                <table class="table table-bordered" class="tabela-sheet" id="table-triceps">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Triceps</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($triceps as $element)
                              <tr>
                                  <td>{{$element->ordem}}</td>
                                  <td>{{$element->name}}</td>
                                  <td>{{$element->serie}}</td>
                                  <td>{{$element->repet}}</td>
                                  <td>{{$element->map}}</td>
                              </tr>	    
                        @endforeach           
	                </tbody>                                     
	            </table>
            </div>
        </div>
	    <div class="row">
	        <div class="col-xs-12 table-responsive">
                <table class="table table-bordered" class="tabela-sheet" id="table-ombro-trapezio">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Ombro e Trapézio</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($ombro_trapezio as $element)
                              <tr>
                                  <td>{{$element->ordem}}</td>
                                  <td>{{$element->name}}</td>
                                  <td>{{$element->serie}}</td>
                                  <td>{{$element->repet}}</td>
                                  <td>{{$element->map}}</td>
                              </tr>	    
                        @endforeach           
	                </tbody>                                     
	            </table>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-xs-12 table-responsive">
	            <table class="table table-bordered" class="tabela-sheet" id="table-peitoral">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Peitoral</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($peitoral as $element)
                              <tr>
                                  <td>{{$element->ordem}}</td>
                                  <td>{{$element->name}}</td>
                                  <td>{{$element->serie}}</td>
                                  <td>{{$element->repet}}</td>
                                  <td>{{$element->map}}</td>
                              </tr>	    
                        @endforeach           
	                </tbody>                                     
	            </table>
	         </div>
		</div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered" class="tabela-sheet" id="table-costas">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Costas</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($costas as $element)
                              <tr>
                                  <td>{{$element->ordem}}</td>
                                  <td>{{$element->name}}</td>
                                  <td>{{$element->serie}}</td>
                                  <td>{{$element->repet}}</td>
                                  <td>{{$element->map}}</td>
                              </tr>	    
                        @endforeach           
	                </tbody>                                     
	            </table>
            </div>
        </div>	        
        <div class="row">
            <div class="col-xs-12 table-responsive">
	            <table class="table table-bordered" class="tabela-sheet" id="table-quadril-perna-coxa">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Quadril, Coxa e Perna</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                     @foreach ($quadril_perna_coxa as $element)
	                        <tr>
	                            <td>{{$element->ordem}}</td>
	                            <td>{{$element->name}}</td>
	                            <td>{{$element->serie}}</td>
	                            <td>{{$element->repet}}</td>
	                            <td>{{$element->map}}</td>
	                        </tr>	    
	                    @endforeach             
	                </tbody>                                     
	            </table>
	        </div>
        </div>
	    <div class="row">
	        <div class="col-xs-12 table-responsive">
	            <table class="table table-bordered" class="tabela-sheet" id="table-abdomen">
	                <thead>
	                    <tr>		                        
	                        <th class="col-md-1">Ordem</th>
	                        <th class="col-md-8">Exercicio: <span class="text-uppercase text-danger">Abdomen</span></th>
	                        <th class="col-md-1">Séries</th>
	                        <th class="col-md-1">Repet.</th>
	                        <th class="col-md-1">Máq.</th>
	                    </tr>
	                </thead>
	                <tbody>
	                     @foreach ($abdomen as $element)
                            <tr>
                                <td>{{$element->ordem}}</td>
                                <td>{{$element->name}}</td>
                                <td>{{$element->serie}}</td>
                                <td>{{$element->repet}}</td>
                                <td>{{$element->map}}</td>
                            </tr>	    
                        @endforeach             
	                </tbody>                                     
	            </table>
            </div>
        </div>
	</section><!-- /.content -->
    <div class="clearfix"></div>
@endsection

