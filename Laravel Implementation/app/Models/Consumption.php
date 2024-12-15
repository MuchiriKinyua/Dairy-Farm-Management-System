<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    public $table = 'consumptions';

    public $fillable = [
        'cow_id',
        'date',
        'feed_type',
        'quantity'
    ];

    protected $casts = [
        'date' => 'date',
        'feed_type' => 'string',
        'quantity' => 'string'
    ];

    public static array $rules = [
        'cow_id' => 'nullable',
        'date' => 'nullable',
        'feed_type' => 'nullable|string|max:100',
        'quantity' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function cow(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cow::class, 'cow_id');
    }
}
