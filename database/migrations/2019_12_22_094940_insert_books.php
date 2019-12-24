<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert some stuff
        DB::table('books')->insert(
            array(
                array(
                    'author' => 'Лев Толстой',
                    'name' => 'Война и Мир',
                    'year' => 1995,
                    'manufacture' => 'ЭКСМО'),
                array(
                    'author' => 'Stephen King',
                    'name' => 'The Mist',
                    'year' => 2000,
                    'manufacture' => 'RAIN, LTD'),
                array(
                    'author' => 'Деннис ЛиХейн',
                    'name' => 'Остров Проклятых',
                    'year' => 2000,
                    'manufacture' => 'ЭКСМО'),
                array(
                    'author' => 'Петр Сухоруков',
                    'name' => 'Биология, 7 класс',
                    'year' => 2019,
                    'manufacture' => 'Самиздат'),
                array(
                    'author' => 'Эллен Пейдж',
                    'name' => 'Автобиография',
                    'year' => 1992,
                    'manufacture' => 'ЭКСМО')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
