<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'phone',
        'address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Customer::class;
    }
}
