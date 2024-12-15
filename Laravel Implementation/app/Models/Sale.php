<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = 'sales';

    public $fillable = [
        'customer_id',
        'product',
        'quantity',
        'unit_price',
        'total_price',
        'sales_date'
    ];

    protected $casts = [
        'product' => 'string',
        'quantity' => 'string',
        'unit_price' => 'string',
        'total_price' => 'string',
        'sales_date' => 'datetime'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'product' => 'nullable|string|max:20',
        'quantity' => 'nullable|string|max:20',
        'unit_price' => 'nullable|string|max:20',
        'total_price' => 'nullable|string|max:20',
        'sales_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }
}
