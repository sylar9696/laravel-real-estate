<?php

use Illuminate\Database\Seeder;

use App\Models\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $house = new House();

        $arrayMuldimensionale = [
            [
                "nome" => "nome casa"

            ],
            [],
            []
        ]

        foreach( $arrayMuldimensionale as $item ){
            $new_house = new House();
            $new_house->nome = $item['nome']
        }

        $house->address = 'pippo';
        $house->price = 100000;
        $house->type = 'appartaments';
        $house->square_meters = 200;
        $house->rooms = 5;
        $house->is_new = true;
        $house->is_available = true;
        $house->bare_ownership = true;
        $house->is_empty = true;
        $house->bathrooms = 2;
        $house->floors = 4;
        $house->postal_code = '20450';
        $house->description = 'Lorem ipsum';

        $house->save();
    }
}
