<?php

use App\Models\OrderTour;
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
        Schema::create('order_tours', function (Blueprint $table) {
            $table->id();

            $table->integer('tour_id')->nullable()->default(NULL);
            $table->text('name')->nullable()->default(NULL);
            $table->text('familie')->nullable()->default(NULL);
            $table->string('mail')->nullable()->default(NULL);
            $table->string('phone')->nullable()->default(NULL);
            $table->text('promo_code')->nullable()->default(NULL);
            
            $table->string('status')->default(OrderTour::STATUS_NEW);

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
        Schema::dropIfExists('order_tours');
    }
};
