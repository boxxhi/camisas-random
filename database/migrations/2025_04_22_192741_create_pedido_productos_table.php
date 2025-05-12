<?php

use App\Models\Pedido;
use App\Models\Producto;
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
        Schema::create('pedido_productos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pedido::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Producto::class)->constrained()->cascadeOnDelete();
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_productos');
    }
};
