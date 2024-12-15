<?php

namespace App\Repositories;

use App\Models\Record;
use App\Repositories\BaseRepository;

class RecordRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'cow_id',
        'vet_name',
        'visit_date',
        'description',
        'treatment_details',
        'cost'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Record::class;
    }
}
