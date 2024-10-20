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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_group_id')->constrained('user_groups')->onDelete('cascade');
            $table->enum('user_type',['admin','user'])->default('user');
            $table->string('name',100);
            $table->string('username',100)->unique();
            $table->string('slug',100)->unique();
            $table->string('email',100)->unique()->nullable();
            $table->string('mobile_no',50)->unique()->nullable();
            $table->string('password',255);
            $table->text('image_url')->nullable();
            $table->string('platform_type',100)->default('custom');
            $table->string('platform_id',100)->nullable();
            $table->enum('status',['1','0'])->default('1');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->index(['user_group_id','slug','email','mobile_no','status'],'index1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');

    }
};
