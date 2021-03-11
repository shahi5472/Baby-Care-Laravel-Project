<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDaycaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_daycares', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone',15);
            $table->string('address');
            $table->string('p_name');
            $table->time('g_time');
            $table->time('t_time');
            $table->date('date');
            $table->double('payable')->default(0);
            $table->double('paid')->default(0);
            $table->string('payment_status')->default('unpaid');
            $table->string('isApprove')->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_daycares');
    }
}
