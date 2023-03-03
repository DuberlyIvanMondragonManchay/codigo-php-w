<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();


            $table->enum('status', ['DRAFT', 'STRATEGY_REQUEST', 'STRATEGIC_IN_PROCESS', 'STRATEGIC_FINISHED', 'PUBLISHED', 'SUCCESSFUL_CLOSING', 'CLOSED_FAILED', 'CLOSED_TRUNCATED', 'CLOSED_FOR_PAUSE', 'CLOSED_DUE_TO_EXPIRATION'])->default('DRAFT');

            $table->string('name', 255)->nullable();
            $table->string('third_party_name', 255)->nullable();

            $table->boolean('hide_company_name')->default(0); // no
            $table->boolean('recruiting_another_company')->default(0); // no

            $table->string('workday', 255)->nullable();
            $table->string('type_of_contract', 255)->nullable();
            $table->string('working_modality', 255)->nullable();
            $table->string('seniority', 255)->nullable();
            $table->string('minimum_level_of_education', 255)->nullable();
            $table->string('education_status', 255)->nullable();
            $table->string('job_hierarchy', 255)->nullable();

            $table->decimal('minimum_salary', 10,2)->nullable();
            $table->decimal('maximum_salary', 10,2)->nullable();
            $table->string('currency', 255)->nullable();
            $table->decimal('exact_salary', 10,2)->nullable();

            $table->boolean('show_exact_salary')->default(0); // no
            

            $table->longText('Company_description')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('detail_requirements')->nullable();
            $table->longText('detail_benefits')->nullable();
            
            

            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('jobs');
    }
}
