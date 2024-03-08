<?php

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
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });
        tevekenyseg::create([
            'tevekenyseg_id'=>1,
            'tevekenyseg_nev'=>'kerékpárral jöttem iskolába',
            'pontszam'=>1
        ]);
        tevekenyseg::create([
            'tevekenyseg_id'=>2,
            'tevekenyseg_nev'=>'rollerrel jöttem iskolába ',
            'pontszam'=>2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
