<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Crm\Contact;
use App\Models\Model;

class ContactController extends Controller
{
    public function getModel(): Model
    {
        return new Contact();
    }
}