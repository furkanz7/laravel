<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}