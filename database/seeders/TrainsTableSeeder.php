<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $treni = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Milano Centrale',
                'stazione_arrivo' => 'Roma Termini',
                'orario_partenza' => '2026-05-10 08:00:00',
                'orario_arrivo' => '2026-05-10 11:10:00',
                'codice_treno' => 'FR9521',
                'totale_carrozze' => 11,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Torino Porta Nuova',
                'stazione_arrivo' => 'Napoli Centrale',
                'orario_partenza' => '2026-05-10 09:30:00',
                'orario_arrivo' => '2026-05-10 15:45:00',
                'codice_treno' => 'IT8920',
                'totale_carrozze' => 8,
                'in_orario' => false,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Trenord',
                'stazione_partenza' => 'Milano Cadorna',
                'stazione_arrivo' => 'Como Lago',
                'orario_partenza' => '2026-05-10 10:00:00',
                'orario_arrivo' => '2026-05-10 11:00:00',
                'codice_treno' => 'TN102',
                'totale_carrozze' => 4,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'azienda' => 'SNCF',
                'stazione_partenza' => 'Milano Garibaldi',
                'stazione_arrivo' => 'Paris Gare de Lyon',
                'orario_partenza' => '2026-05-11 06:00:00',
                'orario_arrivo' => '2026-05-11 13:30:00',
                'codice_treno' => 'TGV847',
                'totale_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Bologna Centrale',
                'stazione_arrivo' => 'Firenze SMN',
                'orario_partenza' => '2026-05-10 14:15:00',
                'orario_arrivo' => '2026-05-10 14:55:00',
                'codice_treno' => 'FR9933',
                'totale_carrozze' => 9,
                'in_orario' => true,
                'cancellato' => true,
            ],
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Venezia Santa Lucia',
                'stazione_arrivo' => 'Roma Tiburtina',
                'orario_partenza' => '2026-05-10 16:00:00',
                'orario_arrivo' => '2026-05-10 19:45:00',
                'codice_treno' => 'IT9988',
                'totale_carrozze' => 8,
                'in_orario' => false,
                'cancellato' => false,
            ]
        ];


        foreach ($treni as $treno) {

            $nuovoTreno = new Train(); //Recuperiamo il Treno dai Models

            $nuovoTreno->azienda = $treno['azienda'];
            $nuovoTreno->stazione_partenza = $treno['stazione_partenza'];
            $nuovoTreno->stazione_arrivo = $treno['stazione_arrivo'];
            $nuovoTreno->orario_partenza = $treno['orario_partenza'];
            $nuovoTreno->orario_arrivo = $treno['orario_arrivo'];
            $nuovoTreno->codice_treno = $treno['codice_treno'];
            $nuovoTreno->totale_carrozze = $treno['totale_carrozze'];
            $nuovoTreno->in_orario = $treno['in_orario'];
            $nuovoTreno->cancellato = $treno['cancellato'];

            $nuovoTreno->save();
        }
    }
}
