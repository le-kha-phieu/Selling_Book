<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Tên sản phẩm');
            $table->string('author')->comment('Tác giả');
            $table->string('publisher')->comment('Nhà xuất bản');
            $table->integer('publishing_year')->comment('Xuất bản năm');
            $table->string('image_product')->comment('Ảnh sản phẩm');
            $table->string('description')->comment('Tóm tắt nội dung');
            $table->bigInteger('category_id')->comment('Mã danh mục');
            $table->string('delivery_time')->nullable()->comment('Thời gian giao hàng');
            $table->integer('price')->comment('Giá sản phẩm');
            $table->integer('sell_number')->nullable()->comment('Số lượng đã bán');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
