<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->collation('utf8_unicode_ci');
            $table->string('slug')->index()->collation('utf8_unicode_ci');
            $table->string('image', 255)->collation('utf8_unicode_ci')->nullable(); // ảnh
            $table->string('summary')->collation('utf8_unicode_ci')->nullable(); // tóm tắ
            $table->string('description')->collation('utf8_unicode_ci')->nullable(); //mô tả
            $table->integer('price')->default(0); // giá doc
            $table->integer('sale')->default(0); // khuyens mãi
            $table->integer('position')->default(0); // vị trí
            $table->integer('is_active')->default(1); // trạng thái
            $table->integer('is_hot')->default(0); // sp hot
            $table->integer('views')->default(0); // lượt xem
            $table->integer('category_id')->default(0); // chọn danh mục
            $table->integer('user_id')->default(0); // lưu người tạo
            $table->string('keyword_seo', 255)->collation('utf8_unicode_ci')->nullable(); // seo từ khóa google
            $table->string('description_seo', 255)->collation('utf8_unicode_ci')->nullable(); // lưu
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
        Schema::dropIfExists('products');
    }
}
