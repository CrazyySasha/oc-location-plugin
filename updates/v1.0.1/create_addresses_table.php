<?php

namespace Crazy\Location\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateAddressesTable Migration
 */
class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_location_addresses', function (Blueprint $table) {

            $table->increments('id');
            $table->boolean('is_active')->default(false);
            $table->string('formatted');
            $table->float('lat', 16, 14)->nullable();
            $table->float('lng', 16, 14)->nullable();
            $table->integer('sort_order')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_location_addresses');
    }
}
