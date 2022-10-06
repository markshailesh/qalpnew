<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('pincode')->nullable();
            $table->string('full_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('second_phone')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('email')->nullable();
            $table->string('new_password')->nullable();
            $table->string('confirm_password')->nullable();
            $table->string('audhar_img')->nullable();
            $table->string('audhar_no')->nullable();
            $table->string('pancard_img')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->string('result_document')->nullable();
            $table->string('document_file')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('marks')->nullable();
            $table->string('document_name')->nullable();
            $table->string('doc_img')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
