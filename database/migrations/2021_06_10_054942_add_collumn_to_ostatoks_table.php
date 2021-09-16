
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnToOstatoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ostatoks', function (Blueprint $table) {
            $table->foreignId('product_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ostatoks', function (Blueprint $table) {
            //
        });
    }
}
