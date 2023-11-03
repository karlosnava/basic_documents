<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doc_documentos', function (Blueprint $table) {
            $table->bigIncrements('doc_id');
            $table->string('doc_nombre');
            $table->string('doc_codigo')->unique();
            $table->longText('doc_contenido');
            $table->unsignedBigInteger('doc_id_tipo');
            $table->unsignedBigInteger('doc_id_proceso');

            $table->foreign('doc_id_tipo')
                ->references('tip_id')->on('tip_tipo_docs')
                ->cascadeOnUpdate()->restrictOnDelete();
           
            $table->foreign('doc_id_proceso')
                ->references('pro_id')->on('pro_procesos')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doc_documentos');
    }
};
