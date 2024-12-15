<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    public $table = 'cows';

    public $fillable = [
        'cow_number',
        'breed',
        'gender',
        'date_of_birth',
        'purchase_date',
        'status'
    ];

    protected $casts = [
        'breed' => 'string',
        'gender' => 'string',
        'date_of_birth' => 'datetime',
        'purchase_date' => 'datetime',
        'status' => 'string'
    ];

    public static array $rules = [
        'cow_number' => 'nullable',
        'breed' => 'nullable|string|max:20',
        'gender' => 'nullable|string|max:10',
        'date_of_birth' => 'nullable',
        'purchase_date' => 'nullable',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function consumptions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Consumption::class, 'cow_id');
    }

    public function productions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Production::class, 'cow_id');
    }

    public function records(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Record::class, 'cow_id');
    }
}
