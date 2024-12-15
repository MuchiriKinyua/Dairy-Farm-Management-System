<?php

namespace App\Repositories;

use App\Models\Cow;
use App\Repositories\BaseRepository;

class CowRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'cow_number',
        'breed',
        'gender',
        'date_of_birth',
        'purchase_date',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Cow::class;
    }
}
