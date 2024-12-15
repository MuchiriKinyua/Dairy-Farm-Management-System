<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Repositories\BaseRepository;

class SaleRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'product',
        'quantity',
        'unit_price',
        'total_price',
        'sales_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Sale::class;
    }
}
