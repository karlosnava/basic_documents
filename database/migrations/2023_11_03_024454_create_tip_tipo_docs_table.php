<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tip_tipo_docs', function (Blueprint $table) {
            $table->bigIncrements('tip_id');
            $table->string('tip_nombre', 100)->unique();
            $table->string('tip_prefijo', 5);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pro_tipo_docs');
    }
};
