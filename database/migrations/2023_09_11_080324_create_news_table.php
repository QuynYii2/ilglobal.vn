<?php

use App\Enums\NewsStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('thumbnail');
            $table->integer('views')->default(1);
            $table->string('status')->default(NewsStatus::ACTIVE);

            $table->string('title_vi');
            $table->string('title_en');

            $table->longText('content_vi');
            $table->longText('content_en');

            $table->longText('short_content_vi');
            $table->longText('short_content_en');

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
        Schema::dropIfExists('news');
    }
}
