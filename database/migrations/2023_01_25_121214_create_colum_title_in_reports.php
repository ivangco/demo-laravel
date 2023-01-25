<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_amongus_reports', function (Blueprint $table) {
            $table->text('amongustate');
            $table->text('amongustitle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_amongus_reports', function (Blueprint $table) {
            $table->dropColumn('amongustate');
            $table->dropColumn('amongustitle');
        });
    }
};
