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

      // METODO CON FAKER

      // richiamo nella funzione il faker che mi genererà dati randomici
      // for($i=0; $i<10; $i++){
      //   creo una nuova istanza del modello Train
      //   $train = new Train();

      //   memorizzo i campi che voglio aggiungere
      //   $train->azienda = $faker->words(1, true);
      //   $train->stazione_partenza = $faker->city();
      //   $train->stazione_arrivo = $faker->city();
      //   $train->data_partenza = $faker->date();
      //   $train->data_arrivo = $faker->date();
      //   $train->orario_partenza = $faker->time('H:i');    
      //   $train->orario_arrivo = $faker->time('H:i');
      //   $train->cod_treno = $faker->randomNumber(4, true);
      //   $train->n_carrozze = $faker->randomDigitNotNull();
      //   $train->in_orario = $faker->boolean();
      //   $train->cancellato = $faker->boolean();

      //   salvo il mio record con i valori specifiati sopra
      //   $train->save();

      // }


      // METODO BONUS CON IMPORTAZIONE FILE CSV

      // apro il file csv importato nella cartella database in modalità lettura
      $trainsFile = fopen(__DIR__ . '/../trains.csv', 'r');

      // leggo la prima riga del file
      $trainRecord = fgetcsv($trainsFile);
      // leggo la seconda riga in modo da sovrascrivere la variabile e non stamparmi le intestazioni di colonna
      $trainRecord = fgetcsv($trainsFile);

      // ciclo le righe presenti dalla seconda in poi 
      while($trainRecord != false){
        // creo una nuova istanza del modello Train
        $train = new Train();

        // memorizzo i valori associandoli alle posizioni nel file
        $train->company = $trainRecord[0];
        $train->departure_station = $trainRecord[1];
        $train->arrival_station = $trainRecord[2];
        $train->departure_time = $trainRecord[3];
        $train->arrival_time = $trainRecord[4];
        $train->train_code = $trainRecord[5];
        $train->wagons_number = $trainRecord[6];
        $train->on_time = $trainRecord[7];
        $train->cancelled = $trainRecord[8];

        // salvo i valori
        $train->save();

        // leggo la riga successiva
        $trainRecord = fgetcsv($trainsFile);
      }

    }
}
