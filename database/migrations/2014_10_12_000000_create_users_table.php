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
            $table->increments('id');
            $table->string('username')->unique()->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('type')->default(0);
            $table->string('profile_photo_path')->nullable();
            $table->foreignId('role_id')->nullable()->constrained('roles','id')->onDelete('cascade');
            $table->foreignId('country_id')->nullable()->constrained('countries')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamp('last_seen')->nullable();
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
        Schema::dropIfExists('users');
    }
};
