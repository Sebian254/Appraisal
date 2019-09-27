<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppraisalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('LevelOfExecution');
            $table->string('QualityOfWork');
            $table->string('ConsistencyInImprovement');
            $table->string('ClientAndPeerFeedback');
            $table->string('SalesRevenueGenerated');
            $table->string('ResponsivenessToFeedback');
            $table->string('AbilityToTakeOwnership');
            $table->string('RateOfCompletion');
            $table->integer('register_id')->unsigned()->index()->nullable();
            $table->foreign('register_id')->reference('id')->on('registers');
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
        Schema::dropIfExists('appraisals');
    }
}
