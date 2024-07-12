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
        Schema::create('hardware_supports', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->string("img");
            $table->string("description");
            $table->string("additional_details");
            $table->enum("status", ["completed", "ongoing", "canceled", "sent"]);
            $table->enum("payment_method", ["cash", "credit", "E-wallet"]);
            $table->string("city");
            $table->enum("support_method", ["delivery", "on_office"]);
            $table->enum("is_delivered", [True, False]);
            $table->integer("cost")->nullable();
            $table->unsignedBigInteger("user_id")->unique();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger("technician_id")->unique();
            $table->foreign("technician_id")->references("id")->on("technicians")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_supports');
    }
};
