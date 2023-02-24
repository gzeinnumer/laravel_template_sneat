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
        Schema::create('trans_h_todo', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('name');
            $table->text('details');
            $table->text('results');
            $table->text('results_catatan');
            $table->integer('status')->default(0);
            $table->integer('flag_active')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_h_todo');
    }
};
