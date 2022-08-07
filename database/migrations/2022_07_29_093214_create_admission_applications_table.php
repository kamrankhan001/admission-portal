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
        Schema::create('admission_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('program');
            $table->string('father_name');
            $table->string('father_cnic');
            $table->string('father_mobile_number');
            $table->string('father_occupation');
            $table->string('father_salary');
            $table->string('address');
            $table->string('hafiz_quran');
            $table->string('mobile_number');
            $table->string('matriculation');
            $table->string('total_marks_metric');
            $table->string('obtain_marks_metric');
            $table->string('intermediate');
            $table->string('total_marks_inter');
            $table->string('obtain_marks_inter');
            $table->string('matriculation_result');
            $table->string('intermediate_result');
            $table->string('cnic_card');
            $table->string('domicile');
            $table->string('challan')->nullable();
            $table->string('status')->default('undereview');
            $table->string('challan_no');
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
        Schema::dropIfExists('admission_applications');
    }
};
