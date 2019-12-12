<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->string('judul');
            $table->string('judul_alt')->nullable();
            $table->year('tahun');
            $table->char('jenis', 20);
            $table->float('skor');
            $table->text('sinopsis');
            $table->string('musim');
            $table->string('user_post_id');
            $table->string('user_edit_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
}
