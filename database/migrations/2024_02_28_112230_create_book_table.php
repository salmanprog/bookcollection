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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auhtor_id')->constrained('users')->onDelete('cascade');
            $table->text('author_name')->nullable();
            $table->string('slug',100)->unique();            
            $table->string('title',255);
            $table->string('publish_date',255);
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->text('genre')->nullable();
            $table->text('image_url')->nullable();
            $table->enum('status',['1','0'])->default('1');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->index(['auhtor_id','slug','title'],'index1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');

    }
};
