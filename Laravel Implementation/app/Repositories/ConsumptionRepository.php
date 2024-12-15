<?php

namespace App\Repositories;

use App\Models\Consumption;
use App\Repositories\BaseRepository;

class ConsumptionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'cow_id',
        'date',
        'feed_type',
        'quantity'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Consumption::class;
    }
}
