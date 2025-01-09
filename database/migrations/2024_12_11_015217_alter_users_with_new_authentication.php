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
            $table->dropColumn('google_id');
            $table->dropColumn('github_id');
            $table->dropColumn('facebook_id');
            $table->dropColumn('twitter_id');
            $table->dropColumn('reddit_id');
            $table->dropColumn('spotify_id');
            $table->dropColumn('deezer_id');
            $table->dropColumn('two_factor_secret');
            $table->dropColumn('two_factor_recovery_codes');
            $table->dropColumn('password');

            $table->string('nickname');
            $table->text('picture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
