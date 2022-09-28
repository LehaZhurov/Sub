<?php 
use Support\Migration\Migration;
 
return new class extends Migration
{
    
    public function up()
    {
        $this->schema->create('emails', function ($table) {
            $table->id();
            $table->string('email')->unique();
            $table->integer('user_id')->unique();
            $table->boolean('is_checked');
            $table->boolean('is_valid');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        $this->schema->dropIfExists('emails');
    }
};
