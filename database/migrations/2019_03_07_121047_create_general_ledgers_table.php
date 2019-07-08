<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_ledgers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->date('transaction_date');
            $table->string('transaction_type'); //witdrawal,deposit,disbursement etc
            $table->string('receipt_or_voucher_no')->default(null);//depends on transaction type
            $table->decimal('credit',19,4)->default(0);
            $table->decimal('debit',19,4)->default(0);
            $table->text('description_or_reason')->default(null);
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_ledgers');
    }
}
