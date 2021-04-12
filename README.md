## Laravel 8.0 blog
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
</p>

In this tutorial, we are going to walk-through creating a simple blog in Laravel and Livewire. It will be pretty simple and can be used as a starting point for building your blog with these awesome frameworks.

## Installation
#### Create a new Laravel app
First, we'll create a new app in a folder called blog: <br>
<code> laravel new blog </code>
Let's move on to creating our posts table migration.

## Create a new posts table
We can create our posts table migration with the following command:<br>
<code>php artisan make:migration create_posts_table</code>
If we open up that file, we can add the following schema data to our migration:<br>
<code>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->boolean('active')->default(1);
            $table->boolean('featured')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
</code>

