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
        // Create the Tags table
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Create the JobTag table
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();

            // Foreign key for the JobListing model (with custom column name)
            $table->foreignId('job_listing_id')    // Use the correct column name as JobListing_id
                  ->constrained('job_listing')    // Constrained to the JobListing table
                  ->cascadeOnDelete();           // Cascades delete if JobListing is deleted

            // Foreign key for the Tag model
            $table->foreignId('tag_id')           // Use the correct column name as tag_id
                  ->constrained('tags')          // Constrained to the Tags table
                  ->cascadeOnDelete();           // Cascades delete if Tag is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the JobTag and Tags tables
        Schema::dropIfExists('job_tags');
        Schema::dropIfExists('tags');
    }
};
