## Laravel 8.0 blog
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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
If we open up that file, we can add the following schema data to our migration:

