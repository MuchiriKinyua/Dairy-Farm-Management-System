<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    public $table = 'productions';

    public $fillable = [
        'cow_id',
        'date',
        'quantity',
        'shift'
    ];

    protected $casts = [
        'date' => 'date',
        'quantity' => 'string',
        'shift' => 'string'
    ];

    public static array $rules = [
        'cow_id' => 'nullable',
        'date' => 'nullable',
        'quantity' => 'nullable|string|max:20',
        'shift' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function cow(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cow::class, 'cow_id');
    }
}
