<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('item');
        $table->string('supplier');
        $table->date('entry_date');
        $table->date('requested_delivery_date');
        $table->date('delivered_date')->nullable();
        $table->decimal('unit_price', 10, 2);
        $table->integer('quantity');
        $table->decimal('total_price', 12, 2);
        $table->timestamps();
    });
}

};
