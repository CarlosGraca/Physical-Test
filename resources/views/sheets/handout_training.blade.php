@extends($layout)
@section('main-content')
    <div class="row">                
        <div class="col-lg-3 col-xs-3">                    
              <img src="/img/logo.png" width="150" alt="" style="margin-left:10px;">                
        </div>
        <div class="col-lg-3 col-xs-2"></div>
        <div class="col-lg-6 col-xs-6">
            <h3> <strong>Ficha de Treino</strong></h3>
        </div>                    
    </div>
    <div class="row">
	    <div class="col-lg-12">	 
	        <div class="col-lg-4 col-xs-4">
		        <p>Nome: Carlos Alberto Andrade da Graça</p>
		        <p>Data de nacimento: 20/03/1993</p>
		        	            
	        </div>
	        <div class="col-lg-4 col-xs-4">
	            <p>Aluno: Intermedio</p>
		        <p>Objetivos: Musculacao</p>		        
	        </div>
	        <div class="col-lg-4 col-xs-4">
	            <p>Dias de treino: 3º 5º</p>
	            <p>Data de Incio: 18/09/2016</p>
	        </div>
	    </div>
	</div>

    <div class="row">
	    <div class="col-lg-12">	        
	        <div class="box box-default">
	            <div class="box-header with-border">
	                <h3 class="box-title"><strong>Membros Superiores</strong></h3>
	                <div class="pull-left box-tools">
	                </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="box-body">
	                <div class="row">
		                <table class="table table-bordered" class="tabela-sheet" id="table-biceps-antebraco">
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
		            <div class="row">
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
	        </div>
	    </div>
	    <div class="col-lg-12">	        
	        <div class="box box-default">
	            <div class="box-header with-border">
	                <h3 class="box-title"><strong>Membros Inferiores</strong></h3>
	                <div class="pull-left box-tools">
	                </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="box-body">
	                <div class="row">
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
		            <div class="row">
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
	        </div>
	    </div>
	</div>
@endsection