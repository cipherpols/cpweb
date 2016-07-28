<?php namespace Cipherpols\Ui\Updates;
/**
 * @author: Duc Duong <duongthienduc@gmail.com>
 * @file: add_description_col_to_clients_table.php
 */

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddDescriptionColToClientsTable extends Migration
{
    public function up()
    {
        Schema::table('clients', function(Blueprint $table) {
            $table->text('description');
        });
    }

    public function down()
    {
        Schema::table('clients', function(Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
