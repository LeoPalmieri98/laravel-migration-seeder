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

        $nuovoTreno = new Train(); //importarlo dai Models
        $nuovoTreno->azienda = 'Trenitalia';
        $nuovoTreno->stazione_partenza = 'Milano Centrale';
        $nuovoTreno->stazione_arrivo = 'Roma Termini';
        $nuovoTreno->orario_partenza = '2026-05-10 08:00:00';
        $nuovoTreno->orario_arrivo = '2026-05-10 11:10:00';
        $nuovoTreno->codice_treno = 'FR9521';
        $nuovoTreno->totale_carrozze = 11;
        $nuovoTreno->in_orario = true;
        $nuovoTreno->cancellato = false;
        $nuovoTreno->save();
    }
}
