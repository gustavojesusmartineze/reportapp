<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Product;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'total',
    ];

    // Relation with Client.
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Relation with Product.
    public function products()
    {
        return $this->belongsToMany(Product::class, 'invoice_products')->withPivot('quantity');
    }
}
