<?php
/**
* 
*/
use App\Exercices
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ExercicesTableSeeder extends Seeder
{
	
	public function run()
	{
		Model::unguard();
		
		Exercices::create(['name' => 'Biceps máquina', 'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps direto', 'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps pronado', 'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps alternado',    'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps concent', 'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps scoth banco', 'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps punho', 'type' => 'biceps-antebraco']);
        Exercices::create(['name' => 'Biceps punho invertida',    'type' => 'biceps-antebraco']);

        Exercices::create(['name' => 'Triceps', 'type' => 'triceps']);
        Exercices::create(['name' => 'Triceps na polia alta', 'type' => 'triceps']);
        Exercices::create(['name' => 'Triceps paralelo', 'type' => 'triceps']);
        Exercices::create(['name' => 'Triceps testa', 'type' => 'triceps']);
        Exercices::create(['name' => 'Triceps kick back', 'type' => 'triceps']);
        Exercices::create(['name' => 'Triceps francês', 'type' => 'triceps']);
        Exercices::create(['name' => 'Triceps concentrado', 'type' => 'triceps']);


        Exercices::create(['name' => 'Desenvolvimento', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Desenvolvimento unilateral', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Elevação frontal de ombro', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Extensão de ombro', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Encolhimento', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Elevação lateral de ombro'=> 'ombro-trapesio']);
        Exercices::create(['name' => 'Adução de ombro', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Rotação Externa de ombro', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Rotação interna de ombro', 'type' => 'ombro-trapesio']);
        Exercices::create(['name' => 'Remada alta', 'type' => 'ombro-trapesio']);

        Exercices::create(['name' => 'Supino reto (horizontal)', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Supino inclinado', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Supino declinado', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Crucifixo (declinado, inclinado horiz, horiz pronado)', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Peck Deck ou voador', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Supino horizontal barra / halteres', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Supino vertical', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Apoio de frente solo/bola/apoio e potência', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Cross over', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Crucifixo declinado horizontal/H.pronado/Inclinado', 'type' => 'peitoral']);
        Exercices::create(['name' => 'Pull over quebrado', 'type' => 'peitoral']);

        Exercices::create(['name' => 'Barra fixa pronada/supinada/neutra', 'type' => 'costas']);
        Exercices::create(['name' => 'Puxado frente/pronada/supinada/neutra', 'type' => 'costas']);
        Exercices::create(['name' => 'Extensão de ombro polia ou elástico', 'type' => 'costas']);
        Exercices::create(['name' => 'Remada na polia baixa/media/pronada/supinada/neutra', 'type' => 'costas']);
        Exercices::create(['name' => 'Remada horizontal sentada', 'type' => 'costas']);
        Exercices::create(['name' => 'Remada curvada unil/simultaneo/polia/halt/elástico', 'type' => 'costas']);
        Exercices::create(['name' => 'Remada curvada (pegada aberta) promada', 'type' => 'costas']);
        Exercices::create(['name' => 'Pull over reto barra/halteres', 'type' => 'costas']);
        Exercices::create(['name' => 'Crucifixo inverso', 'type' => 'costas']);
        Exercices::create(['name' => 'Lombar', 'type' => 'costas']);

        Exercices::create(['name' => 'Agachamento livre', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Agachamento unilateral', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Agachamento barra guiada', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'TLeg press inclinado', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Adução de quadril', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Gluteo', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Flexão de quadril', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Extensão de quadril', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Extensão de coxa', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Extensão de joelhos', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Flexão de joelhos', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Flexão de plantar no banco (butcho)', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Flexão de plantar (butcho)', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Levantamento terra', 'type' => 'quadril-perna-coxa']);
        Exercices::create(['name' => 'Stiff', 'type' => 'quadril-perna-coxa']);

        Exercices::create(['name' => 'Reto abdominal flexão apenas do tronco)', 'type' => 'abdmen']);
        Exercices::create(['name' => 'Reto abdominal flexão das pernas com o tronco', 'type' => 'abdmen']);
        Exercices::create(['name' => 'obliquo abdominal unilateral', 'type' => 'abdmen']);
        Exercices::create(['name' => 'Reto abdominal ', 'type' => 'abdmen']);
	}
}





?>