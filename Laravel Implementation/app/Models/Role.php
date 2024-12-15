<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'roles';

    public $fillable = [
        'name',
        'guard_name'
    ];

    protected $casts = [
        'name' => 'string',
        'guard_name' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'guard_name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function modelHasRole(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\ModelHasRole::class);
    }

    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Permission::class, 'role_has_permissions');
    }
}
