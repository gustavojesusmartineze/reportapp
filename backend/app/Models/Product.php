<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sku',
        'price'
    ];

    // Relation with Invoice.
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
