<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Crm\Address;
use App\Models\Model;

class AddressController extends Controller
{
    public function getModel(): Model
    {
        return new Address();
    }
}