<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUserAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_achievements', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('achievementId')->references('id')->on('achievements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_achievements', function (Blueprint $table) {
            $table->dropForeign('user_achievements_userId_foreign');
            $table->dropForeign('user_achievements_achievementId_foreign');
        });
    }
}
