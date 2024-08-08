<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('profile_background')->nullable();
            $table->string('country_id')->nullable();
            $table->string('state')->nullable();
            $table->string('service_city')->nullable();
            $table->text('address')->nullable();
            $table->string('post_code')->nullable();
            $table->integer('user_type')->default(0)->comment('0=lawyer, 1=client');
            $table->integer('user_status')->default(1)->comment('0=inactive, 1=active');
            $table->integer('terms_condition')->default(1);
            $table->string('email_verified')->nullable();
            $table->string('speciality')->nullable();
            $table->string('studies')->nullable();
            $table->string('professional_id')->nullable();
            $table->string('ine')->nullable();
            $table->string('rfc')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
