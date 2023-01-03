<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('battle')->default('не вибрано')->after('owner_name');
            $table->string('freestyle')->default('не вибрано')->after('battle');
            $table->string('base')->default('не вибрано')->after('freestyle');
            $table->string('weight')->default('не вибрано')->after('base');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('battle');
            $table->dropColumn('freestyle');
            $table->dropColumn('base');
            $table->dropColumn('weight');
        });
    }
}
