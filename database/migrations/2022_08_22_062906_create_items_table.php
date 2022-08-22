<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\sticky_note;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('text');


            $table->decimal('cost_exact', 10, 2)->nullable();
            $table->decimal('cost_approx_min', 10, 2)->nullable();
            $table->decimal('cost_approx_max', 10, 2)->nullable();

            
            $table->string('text');
            $table->date('deadline')->nullable();

            $table->unsignedBigInteger('sticky_note_id'); 
            $table->foreign('sticky_note_id')
                ->references('id')
                ->on('sticky_notes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
