<?php

namespace Crazy\Location\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateLocationsTable Migration
 */
class CreateLocationsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('crazy_location_locations'))
            Schema::create('crazy_location_locations', function (Blueprint $table) {
                $table->increments('id');

                $table->string('name');
                // $table->text('includes');
                $table->boolean('is_active')->default(false);
                $table->integer('parent_id')->nullable();
                $table->integer('nest_left')->nullable();
                $table->integer('nest_right')->nullable();
                $table->integer('nest_depth')->nullable();

                $table->timestamps();
                $table->softDeletes();
            });
    }

    public function down()
    {
        // Schema::dropIfExists('crazy_location_locations');
    }
}
