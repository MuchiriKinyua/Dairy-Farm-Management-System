<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $table = 'records';

    public $fillable = [
        'cow_id',
        'vet_name',
        'visit_date',
        'description',
        'treatment_details',
        'cost'
    ];

    protected $casts = [
        'vet_name' => 'string',
        'visit_date' => 'date',
        'description' => 'string',
        'treatment_details' => 'string',
        'cost' => 'string'
    ];

    public static array $rules = [
        'cow_id' => 'nullable',
        'vet_name' => 'nullable|string|max:100',
        'visit_date' => 'nullable',
        'description' => 'nullable|string|max:200',
        'treatment_details' => 'nullable|string|max:100',
        'cost' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function cow(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cow::class, 'cow_id');
    }
}
