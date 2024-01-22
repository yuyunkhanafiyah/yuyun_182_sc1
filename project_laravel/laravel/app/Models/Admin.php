<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
        $table->id();
        $table->string('username');
        $table->string('password');
        $table->timestamps();
        });
    }
}
