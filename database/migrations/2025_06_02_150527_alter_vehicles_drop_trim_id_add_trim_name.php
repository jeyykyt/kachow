<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // 1) Drop FK constraint on trim_id (if it exists)
            $table->dropForeign(['trim_id']);
            // 2) Drop the trim_id column itself
            $table->dropColumn('trim_id');
            // 3) Add a new nullable string column to hold the trim’s name
            $table->string('trim_name')->nullable()->after('car_model_id');
        });
    }

    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            // Reverse: drop trim_name, then re‐create trim_id FK
            $table->dropColumn('trim_name');
            $table->foreignId('trim_id')->nullable()->constrained('trims')->after('car_model_id');
        });
    }
};
