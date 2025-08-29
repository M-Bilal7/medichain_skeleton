<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
  public function up(){
    Schema::create('users', function(Blueprint $t){
      $t->bigIncrements('id');
      $t->string('email')->unique();
      $t->string('password')->nullable();
      $t->string('role')->index();
      $t->string('name')->nullable();
      $t->json('meta')->nullable();
      $t->timestamps();
    });
  }
  public function down(){ Schema::dropIfExists('users'); }
}
