<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Crm\Address;

class AddressController extends Controller
{
    public function getModel()
    {
        return Address::class;
    }
}