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
            $table->bigIncrements('id');
            $table->text('product_name');
            $table->string('slug');
            $table->double('product_price')->default(0);
            $table->text('product_img')->default('img');
            $table->text('product_description')->nullable();
            $table->integer('product_sale')->default(0);
            $table->integer('product_rating')->default(0);

            $table->foreignId('brand_id')
                        ->constrained()
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->foreignId('region_id')
                        ->constrained()
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->softDeletes();
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
