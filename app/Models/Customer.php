<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Specify the table name and primary key
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    protected $fillable = [
        'name', 'email', 'password', 'state', 'city', 'address', 'gender', 'dob'
    ];

   
}
