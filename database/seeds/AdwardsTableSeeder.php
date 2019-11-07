<?php

use Illuminate\Database\Seeder;
use App\Models\Adword;
class AdwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adword::create([
            'title' => 'Finden Sie Ihren Anbieter für Postadressen',
            'desc' => 'Beschreiben Sie unverbindlich Ihr Projekt oder Ihren Bedarf an Adressen und holen Sie sich Angebote von Deutschlands besten Direktmarketingunternehmen',
            'list1' =>' Erhalten Sie durchschnittlich 5 Angebote für Ihre Kampagne',
            'list2' => ' Im Schnitt erhalten Sie innerhalb von 72 Stunden 3 Angebote - insgesamt durchschnittlich 6 Angebote',
            'list3' => ' Wählen Sie den Dienstleister Ihres Vertrauens - im Schnitt sind die Angebote 24% günstiger als am freien Markt.'
        ]);
    }
}



