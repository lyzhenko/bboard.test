<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Строка
            $table->text('content'); // поля типа мемо теск
            $table->float('price'); // число с плавающей точность
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //Поле связи.
            $table->timestamps();
            $table->index('created_at'); // Индексирование поля
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbs');
    }
}
