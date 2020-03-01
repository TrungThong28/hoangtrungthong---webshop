<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('image', 255)->nullable()->default(null);
            $table->string('url', 255)->nullable()->default(null);
            $table->integer('target')->unsigned()->nullable();
            $table->text('description')->collation('utf8_unicode_ci')->nullable()->default(null);
            $table->integer('type')->unsigned()->default(0);
            $table->integer('position')->unsigned()->default(0);
            $table->integer('is_active')->unsigned()->default(1);
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
        Schema::dropIfExists('banner');
    }
}
