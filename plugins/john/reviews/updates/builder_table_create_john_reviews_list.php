<?php namespace John\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnReviewsList extends Migration
{
    public function up()
    {
        Schema::create('john_reviews_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->text('text');
            $table->string('avatar', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_reviews_list');
    }
}
