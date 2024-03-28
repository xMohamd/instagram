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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->uniqid();
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('gender')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_admin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('avatar');
            $table->dropColumn('bio');
            $table->dropColumn('gender');
            $table->dropColumn('website');
            $table->dropColumn('is_admin');
        });
    }
};
