<?php 
use Support\Migration\Migration;
return new class extends Migration
{
    
    public function up()
    {
        $this->schema->create('users', function ($table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestampTz('validts');
            $table->boolean('confirmed');
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
        $this->schema->dropIfExists('users');
    }
};
