<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabm_medics', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('medics_cedul', 11);
            $table->string('medics_nombr', 40)->nullable(false);
            $table->string('medics_apell', 40)->nullable(false);
            $table->enum('medics_sexop', ['m','f'])->nullable(false);
            $table->string('medics_telf1', 12)->nullable(false);
            $table->string('medics_telf2', 12)->nullable(true);
            $table->string('medics_email', 40)->nullable(false);
            $table->date('medics_fechn', 40)->nullable(false);
            $table->string('medics_direc', 255)->nullable(false);
            $table->integer('espcmd_codig')->unsigned();
            $table->foreign('espcmd_codig')
                    ->references('espcmd_codig')
                    ->on('tabm_espcmd')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamps();         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabm_medics');
    }
};
