<?php

use App\Models\Tour;
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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();

            $table->integer('author_id')->nullable()->default(NULL);
            $table->string('title');
            $table->text('excerpt')->nullable()->default(NULL);
            $table->text('body')->nullable()->default(NULL);
            $table->string('image')->nullable()->default(NULL);
            $table->string('slug')->unique()->default(NULL);
            $table->text('meta_description')->nullable()->default(NULL);
            $table->text('meta_keywords')->nullable()->default(NULL);
            $table->string('status')->default(Tour::STATUS_INACTIVE);
            $table->decimal('price', 12, 2)->nullable()->default(0.0);
            $table->decimal('old_price', 12, 2)->nullable()->default(0.0);
            $table->date('date_start')->nullable()->default(NULL);
            $table->date('date_end')->nullable()->default(NULL);
            $table->integer('peoples')->nullable()->default(NULL);
            $table->integer('age')->nullable()->default(NULL);
            $table->enum('leavel', [1,2,3,4,5])->nullable()->default(1);

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
        Schema::dropIfExists('tours');
    }
};
