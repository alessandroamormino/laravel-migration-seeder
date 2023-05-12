<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// richiamo il faker
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
      // richiamo nella funzione il faker che mi genererà dati randomici
      for($i=0; $i<10; $i++){
        // creo una nuova istanza del modello Train
        $train = new Train();

        // memorizzo i campi che voglio aggiungere
        $train->azienda = $faker->words(1, true);
        $train->stazione_partenza = $faker->city();
        $train->stazione_arrivo = $faker->city();
        $train->data_partenza = $faker->date();
        $train->data_arrivo = $faker->date();
        $train->orario_partenza = $faker->time('H:i');    
        $train->orario_arrivo = $faker->time('H:i');
        $train->cod_treno = $faker->randomNumber(4, true);
        $train->n_carrozze = $faker->randomDigitNotNull();
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();

        // salvo il mio record con i valori specifiati sopra
        $train->save();

      }
    }
}
