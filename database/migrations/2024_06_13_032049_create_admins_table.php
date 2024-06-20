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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_admin', length: 30);
            $table->enum('jk_admin', ['laki-laki', 'perempuan','khusus']);
            $table->string('nohp_admin',length:15);
            $table->string('email_admin',length:40)->unique();
            $table->string('password_admin');
            $table->text('alamat_admin');
            $table->string('jabatan_admin');
            $table->string('foto');
            $table->timestamps();
        });
    }
};
