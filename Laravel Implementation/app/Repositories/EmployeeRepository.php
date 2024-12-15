<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'role',
        'phone',
        'date_of_joining',
        'salary'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employee::class;
    }
}
