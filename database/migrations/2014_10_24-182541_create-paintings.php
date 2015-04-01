<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaintings extends Migration {


    public  function  up()
    {
            Schema::create ('painting', function($thePainting){

                $thePainting->increments('id');
                $thePainting->string('title');
                $thePainting->string('artist');
                $thePainting->integer('year');
                $thePainting->timestamps();
            });
    }

    public function  down()
    {
        Schema::drop('paintings');
    }


}

?>