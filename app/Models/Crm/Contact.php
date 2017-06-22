<?php

namespace App\Models\Crm;


use App\Models\Model;

class Contact extends Model
{
    public function getIndex()
    {
        return 'crm';
    }

    public function getType()
    {
        return 'contact';
    }

    public function getFields()
    {
        return [
            'first_name' => null,
            'last_name' => null,
            'birth_date' => null,
            'title' => null,
            'suffix' => null
        ];
    }
}