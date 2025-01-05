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
        Schema::create('workings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->integer('road')->nullable();          //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
            $table->float('luck')->nullable();     //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
            $table->string('over')->nullable();          //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
            $table->date('your')->nullable();     //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
            $table->text('math')->nullable();          //เพิ่มคอลัมน์ใหม่ type float 16 bit 2 จุดทศนิยม null ได้
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workings');
    }
};
