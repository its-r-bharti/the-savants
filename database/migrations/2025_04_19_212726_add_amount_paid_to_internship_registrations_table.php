<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAmountPaidToInternshipRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::table('internship_registrations', function (Blueprint $table) {
            $table->integer('amount_paid')->nullable()->after('payment_status'); // Add amount_paid column
        });
    }

    public function down()
    {
        Schema::table('internship_registrations', function (Blueprint $table) {
            $table->dropColumn('amount_paid'); // Remove amount_paid column
        });
    }
}

