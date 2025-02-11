<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('personality_type_id')->nullable();
            $table->foreign('personality_type_id')
                  ->references('id')
                  ->on('personality_types')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['personality_type_id']);
            $table->dropColumn('personality_type_id');
        });
    }
};