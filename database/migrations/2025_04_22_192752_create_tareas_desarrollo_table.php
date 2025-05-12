<?php

use App\Models\Desarrollador;
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
        Schema::create('tareas_desarrollo', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Desarrollador::class)->constrained()->cascadeOnDelete();
            $table->string('descripcion');
            $table->dateTime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas_desarrollo');
    }
};
