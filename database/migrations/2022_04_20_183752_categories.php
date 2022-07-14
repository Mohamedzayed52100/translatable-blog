<?php

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
        Schema::create('categories', function (Blueprint $table)
       {

        //    protected $fillable = [ 'id', 'image', 'parent', 'created_at', 'updated_at', 'deleted_at'];

        $table->increments('id');
        $table->string('image')->nullable();
        $table->integer('parent')->unsigned()->nullable();
        $table->timestamps();
        $table->softDeletes();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
