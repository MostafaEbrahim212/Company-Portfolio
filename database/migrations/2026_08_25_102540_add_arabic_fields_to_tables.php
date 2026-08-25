<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('name_ar')->nullable()->after('name');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->text('description_ar')->nullable()->after('description');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->string('title_ar')->nullable()->after('title');
            $table->longText('content_ar')->nullable()->after('content');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('client_name_ar')->nullable()->after('client_name');
            $table->string('client_role_ar')->nullable()->after('client_role');
            $table->string('company_ar')->nullable()->after('company');
            $table->text('review_ar')->nullable()->after('review');
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('name_ar');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'description_ar']);
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'content_ar']);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['client_name_ar', 'client_role_ar', 'company_ar', 'review_ar']);
        });
    }
};
