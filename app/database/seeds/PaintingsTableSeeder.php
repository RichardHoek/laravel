<?php


    class PaintingsTableSeeder extends Seeder{
        public  function run(){
            $faker = Faker\Factory::create();

            Paintings::truncate();

            for ($i = 0; $i < 50; $i++){
                $painting = Paintings::create(array(
                    'title' => $faker->realText(rand(20,40)),
                    'artist' => $faker->name,
                    'year' => $faker->year
                ));
            }
        }
    }

?>