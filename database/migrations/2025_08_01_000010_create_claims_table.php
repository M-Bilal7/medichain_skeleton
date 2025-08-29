<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration {
  public function up(){
    Schema::create('claims', function(Blueprint $t){
      $t->bigIncrements('id');
      $t->unsignedBigInteger('patient_user_id');
      $t->unsignedBigInteger('insurer_id');
      $t->decimal('amount', 12,2);
      $t->string('status')->default('pending');
      $t->json('metadata')->nullable();
      $t->timestamps();
    });
  }
  public function down(){ Schema::dropIfExists('claims'); }
}
