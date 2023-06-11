<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('reserve_services', function (Blueprint $table) {

            $table -> id();

            $table -> unsignedBigInteger("reserve_id");
            $table -> foreign("reserve_id") 
                   -> references("id") 
                   -> on("reserves") 
                   -> onDelete("cascade");

            $table -> unsignedBigInteger("service_id");
            $table -> foreign("service_id") 
                    -> references("id") 
                    -> on("services") 
                    -> onDelete("cascade");

            $table -> timestamps();
        
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {

        Schema::dropIfExists('reserve_services');
    
    }

};
