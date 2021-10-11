<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // here is Add Product Table 
    public function up()
    {
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // here is product name 
            $table->string('sub_heading'); // here is product short heading 
            $table->unsignedBigInteger('category_id'); // here is primary key of categories table's as a foreign key 
            $table->unsignedBigInteger('subCategory_id'); // here is primary key of sub categories table's as a foreign key
            $table->unsignedBigInteger('brand_id'); // here is primary key of brands table's as a foreign key
            $table->decimal('mrp', 5, 2); // here is MRP of product type is in decimal
            $table->decimal('price', 5, 2); // here is Selling Price of product type is in decimal
            $table->float('discount', 5, 2)->nullable(); // here is Discount given on particular product type is in decimal also type nullable 
            $table->text('short_descript'); // here is Short Description of product type text
            $table->longText('long_descript'); // here is Long Description of product type Longtext
            $table->integer('status'); // here is status of product type integer manage softdelete using status
            $table->string('image'); // here is image of product
            $table->string('color'); // here is color of product
            $table->string('storage'); // here is storage of product
            $table->string('ram'); // here is ram of product
            $table->string('connectivity');
            $table->string('condition');
            $table->string('quantity');
            $table->string('type')->nullable(); // here is type of product type string type and nullable type 
            $table->string('simstyle');
            $table->string('model_no');
            $table->string('warranty')->nullable();
            $table->foreign('category_id')->references('id')->on('categories'); // here is define foreign key from categories table's primary key as a foreign key'
            $table->foreign('subCategory_id')->references('id')->on('subcategories'); // here is define foreign key from sub categories table's primary key as a foreign key'
            $table->foreign('brand_id')->references('id')->on('brands'); // here is define foreign key from brands table's primary key as a foreign key'
            $table->timestamps();
            $table->timestamp('new_arrival', 0)->nullable(); // inserts 7 days after timestamp from time of created_at 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addproducts');
    }
}
