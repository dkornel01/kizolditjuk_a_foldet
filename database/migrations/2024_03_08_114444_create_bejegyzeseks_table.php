<?php

use App\Models\bejegyzesek;
use App\Models\tevekenyseg;
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
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->boolean('allapot');
            $table->integer('osztaly_id');
            //$table->foreign('osztaly_id')->references("osztaly_id")->on('users');
            $table->timestamps();
        });
        bejegyzesek::created([
            'tevekenyseg_id'=>1,
            'allapot'=>true,
            'osztaly_id'=>1
        ]);
        bejegyzesek::created([
            'tevekenyseg_id'=>2,
            'allapot'=>true,
            'osztaly_id'=>1
        ]);  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzeseks');
    }
};
