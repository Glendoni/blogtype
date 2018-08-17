<?php

use Illuminate\Database\Seeder;

// our own seeder class
// usually this would be its own file
class BearAppSeeder extends Seeder {

    public function run() {

        // clear our database ------------------------------------------
        DB::table('bears')->delete();
        DB::table('fish')->delete();
        DB::table('picnics')->delete();
        DB::table('trees')->delete();
        DB::table('bears_picnics')->delete();
//dd('asd');
        // seed our bears table -----------------------
        // we'll create three different bears

        // bear 1 is named Lawly. She is extremely dangerous. Especially when hungry.
        DB::table('bears')->insert([
            [ 'name' => 'Lawly', 'type' => 'Grizzly', 'danger_level' => 8],
            [ 'name' => 'Cerms', 'type' => 'Black', 'danger_level' => 4],
            [ 'name' => 'Adobot', 'type' => 'Polar', 'danger_level' => 3]
        ]);
        $this->command->info('The bears are alive!');

        // seed our fish table ------------------------
        // our fish wont have names... because theyre going to be eaten

        // we will use the variables we used to create the bears to get their id

        DB::table('fish')->insert([
            [ 'weight' => 5, 'bear_id' => 1],
            [ 'weight' => 12, 'bear_id' => 1],
            [ 'weight' => 4, 'bear_id' => 1]
        ]);

        $this->command->info('They are eating fish!');

        // seed our trees table ---------------------

        DB::table('trees')->insert([
            [ 'type' => 'Redwood', 'age' => 500, 'bear_id' => 1],
            [ 'type' => 'Oak', 'age' => 400, 'bear_id' => 1]
        ]);

        $this->command->info('Climb bears! Be free!');

        // seed our picnics table ---------------------

        // we will create one picnic and apply all bears to this one picnic

        DB::table('picnics')->insert(
        [ 'name' => 'Yellowstone', 'taste_level' => 6],
        [ 'name' => 'Grand Canyon', 'taste_level' => 5]
        );
        // link our bears to picnics ---------------------
        // for our purposes we'll just add all bears to both picnics for our many to many relationship


        $this->command->info('They are terrorizing picnics!');

        }

    }

