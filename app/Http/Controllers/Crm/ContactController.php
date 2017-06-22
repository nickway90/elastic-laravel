<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Crm\Contact;

class ContactController extends Controller
{
    public function getModel()
    {
        return Contact::class;
    }
}