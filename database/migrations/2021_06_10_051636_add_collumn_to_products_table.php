<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('brand_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')->after('id');
            $table->foreignId('filter_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')->after('id');
            $table->foreignId('sub_category_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')->after('id');
        });
    }
}
