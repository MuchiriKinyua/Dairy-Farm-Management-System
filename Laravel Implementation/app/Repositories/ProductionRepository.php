<?php

namespace App\Repositories;

use App\Models\Production;
use App\Repositories\BaseRepository;

class ProductionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'cow_id',
        'date',
        'quantity',
        'shift'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Production::class;
    }
}
