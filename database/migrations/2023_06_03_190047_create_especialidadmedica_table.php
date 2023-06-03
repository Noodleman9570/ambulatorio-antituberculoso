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
        Schema::create('tabm_espcmd', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('espcmd_codig');
            $table->string('espcmd_espec', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabm_espcmd');
    }
};
