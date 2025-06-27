<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
        use HasFactory;

    /*our table structure
    
    CREATE TABLE userdata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_email VARCHAR(255) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,
    user_age TINYINT UNSIGNED NOT NULL,
    user_mobile VARCHAR(10) NOT NULL,
    user_city VARCHAR(100) NOT NULL,
    user_about TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);*/



    //here we define table name manumally
    protected $table='userdata';
}
