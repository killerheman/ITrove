<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('ALTER TABLE services MODIFY description TEXT');
        \DB::statement('ALTER TABLE services MODIFY meta_description TEXT');
        \DB::statement('ALTER TABLE services MODIFY full_description LONGTEXT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('ALTER TABLE services MODIFY description VARCHAR(255)');
        \DB::statement('ALTER TABLE services MODIFY meta_description VARCHAR(255)');
        \DB::statement('ALTER TABLE services MODIFY full_description VARCHAR(255)');
    }
};
