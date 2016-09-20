<?php
use App\Exercise;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        //Eloquent::unguard();	 
        //$this->call('ExerciseTableSeeder');

        Model::unguard();
        
        Exercise::create(['name' => 'Biceps máquina', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps direto', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps pronado', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps alternado', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps concent', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps scoth banco', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps punho', 'type' => 'biceps-antebraco']);
        Exercise::create(['name' => 'Biceps punho invertida','type' => 'biceps-antebraco']);

        Exercise::create(['name' => 'Triceps', 'type' => 'triceps']);
        Exercise::create(['name' => 'Triceps na polia alta', 'type' => 'triceps']);
        Exercise::create(['name' => 'Triceps paralelo', 'type' => 'triceps']);
        Exercise::create(['name' => 'Triceps testa', 'type' => 'triceps']);
        Exercise::create(['name' => 'Triceps kick back', 'type' => 'triceps']);
        Exercise::create(['name' => 'Triceps francês', 'type' => 'triceps']);
        Exercise::create(['name' => 'Triceps concentrado', 'type' => 'triceps']);


        Exercise::create(['name' => 'Desenvolvimento', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Desenvolvimento unilateral', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Elevação frontal de ombro', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Extensão de ombro', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Encolhimento', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Elevação lateral de ombro', 'type'=> 'ombro-trapesio']);
        Exercise::create(['name' => 'Adução de ombro', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Rotação Externa de ombro', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Rotação interna de ombro', 'type' => 'ombro-trapesio']);
        Exercise::create(['name' => 'Remada alta', 'type' => 'ombro-trapesio']);

        Exercise::create(['name' => 'Supino reto (horizontal)', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Supino inclinado', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Supino declinado', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Crucifixo (declinado, inclinado horiz, horiz pronado)', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Peck Deck ou voador', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Supino horizontal barra / halteres', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Supino vertical', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Apoio de frente solo/bola/apoio e potência', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Cross over', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Crucifixo declinado horizontal/H.pronado/Inclinado', 'type' => 'peitoral']);
        Exercise::create(['name' => 'Pull over quebrado', 'type' => 'peitoral']);

        Exercise::create(['name' => 'Barra fixa pronada/supinada/neutra', 'type' => 'costas']);
        Exercise::create(['name' => 'Puxado frente/pronada/supinada/neutra', 'type' => 'costas']);
        Exercise::create(['name' => 'Extensão de ombro polia ou elástico', 'type' => 'costas']);
        Exercise::create(['name' => 'Remada na polia baixa/media/pronada/supinada/neutra', 'type' => 'costas']);
        Exercise::create(['name' => 'Remada horizontal sentada', 'type' => 'costas']);
        Exercise::create(['name' => 'Remada curvada unil/simultaneo/polia/halt/elástico', 'type' => 'costas']);
        Exercise::create(['name' => 'Remada curvada (pegada aberta) promada', 'type' => 'costas']);
        Exercise::create(['name' => 'Pull over reto barra/halteres', 'type' => 'costas']);
        Exercise::create(['name' => 'Crucifixo inverso', 'type' => 'costas']);
        Exercise::create(['name' => 'Lombar', 'type' => 'costas']);

        Exercise::create(['name' => 'Agachamento livre', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Agachamento unilateral', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Agachamento barra guiada', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Leg press inclinado', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Adução de quadril', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Gluteo', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Flexão de quadril', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Extensão de quadril', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Extensão de coxa', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Extensão de joelhos', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Flexão de joelhos', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Flexão de plantar no banco (butcho)', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Flexão de plantar (butcho)', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Levantamento terra', 'type' => 'quadril-perna-coxa']);
        Exercise::create(['name' => 'Stiff', 'type' => 'quadril-perna-coxa']);

        Exercise::create(['name' => 'Reto abdominal flexão apenas do tronco)', 'type' => 'abdmen']);
        Exercise::create(['name' => 'Reto abdominal flexão das pernas com o tronco', 'type' => 'abdmen']);
        Exercise::create(['name' => 'obliquo abdominal unilateral', 'type' => 'abdmen']);
        Exercise::create(['name' => 'Reto abdominal ', 'type' => 'abdmen']);
    }
}
