<?php namespace Cipherpols\Ui\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('alias', 20);
            $table->string('role', 30);
            $table->integer('order')->default(0);
            $table->string('avatar', 150)->default('');
            $table->string('short_description', 150)->default('');
            $table->text('full_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
