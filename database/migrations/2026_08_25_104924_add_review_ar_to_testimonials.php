<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('testimonials', function (Blueprint $table) {
            if (!Schema::hasColumn('testimonials', 'review_ar')) {
                $table->text('review_ar')->nullable();
            }
            if (!Schema::hasColumn('testimonials', 'client_name_ar')) {
                $table->string('client_name_ar')->nullable();
            }
            if (!Schema::hasColumn('testimonials', 'client_role_ar')) {
                $table->string('client_role_ar')->nullable();
            }
            if (!Schema::hasColumn('testimonials', 'company_ar')) {
                $table->string('company_ar')->nullable();
            }
        });
    }
    public function down(): void {}
};
