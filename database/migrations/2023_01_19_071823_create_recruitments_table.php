<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('post_applied');
            $table->string('nationality');
            $table->string('qualification');
            $table->string('major_in');
            $table->string('school_name');
            $table->date('date_graduated');
            $table->enum('saudi_council_question', ['yes', 'no', 'na']);
            $table->string('sce_number')->nullable();
            $table->date('sce_validity_date')->nullable();
            $table->string('certificate_training');
            $table->string('resume');
            $table->integer('work_experience_yrs')->unsigned();
            $table->integer('field_experience_yrs')->unsigned();
            $table->enum('qc_inspection_experience', ['yes', 'no', 'na']);
            $table->integer('qc_inspection_experience_count')->unsigned()->nullable();
            $table->enum('aramco_qa_qc_approval', ['yes', 'no', 'na']);
            $table->string('aramcosap_no_or_id')->nullable();
            $table->string('english_skills');
            $table->string('current_salary');
            $table->string('expected_salary');
            $table->string('id_no');
            $table->enum('transferrable_iqama', ['yes', 'no', 'na']);
            $table->enum('driving_license', ['yes', 'no']);
            $table->date('dob');
            $table->string('country');
            $table->string('city');
            $table->string('notice_period');
            $table->string('contact_no')->nullable();
            $table->string('whatsapp_or_imo')->nullable();
            $table->string('skype_id')->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('recruitments');
    }
}
