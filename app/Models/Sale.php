<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Stock::class, 'stock_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function customer(){
        return $this->belongsTo(User::class, 'customer_name','id');
    }
}