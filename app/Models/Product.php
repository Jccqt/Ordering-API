<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
    public function up(): void 
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->id();
            $table->string("name");
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->timestamps();
        });
    }
}
