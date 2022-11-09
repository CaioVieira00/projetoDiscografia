<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('discografias', function (Blueprint $table) {
            $table->foreignId('album_id');
            $table->foreign('album_id')->references('id')->on('albuns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discografias', function (Blueprint $table) {
            $table->dropForeign('discografias_album_id_foreign');
            $table->dropColumn('album_id');
        });
    }
};
