<?php

namespace App\Models\Crm;


use App\Models\Model;

class Address extends Model
{
    public function getIndex()
    {
        return 'crm';
    }

    public function getType()
    {
        return 'address';
    }

    public function getFields()
    {
        return [
            'street_1' => null,
            'street_2' => null,
            'city' => null,
            'state' => null,
            'postal_code' => null,
            'country' => null
        ];
    }
}