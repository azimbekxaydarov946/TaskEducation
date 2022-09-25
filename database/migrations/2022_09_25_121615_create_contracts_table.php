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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->default(\Carbon\Carbon::now()->timezone('Asia/Ashgabat'))->comment('shartnoma boshlagan sana');
            $table->date('end_date')->nullable()->comment('shartnoma tugagan sana');
            $table->string('contract_type')->default('bazaviy kontrakt');
            $table->string('contract_form')->comment('2-tomonlama,3-tomonlama');
            $table->string('pay_type')->comment('Stipendiyasiz, Stipendiyali');
            $table->bigInteger('pay_amount')->comment('shartnomadagi jami to\'lov miqdori');
            $table->integer('student_id');
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
        Schema::dropIfExists('contracts');
    }
};
