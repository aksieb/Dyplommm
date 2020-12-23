<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkCategoriesTable extends Migration {

    public function up() {
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->default(null);
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down() {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('category_id');
            $table->dropColumn('category_id');
        });
    }
}
