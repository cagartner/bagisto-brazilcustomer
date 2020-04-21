<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrColumnsToCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->enum('person_type', ['person', 'company'])->default('person');
            $table->string('document', 20)->nullable();
            $table->string('state_register', 50)->nullable();
            $table->string('company_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('general_register')->nullable();
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
            $table->dropColumn(['person_type', 'document', 'state_register', 'fantasy_name', 'general_register']);
        });
    }
}
