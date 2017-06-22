<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\Contact;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: jwdepetro
 * Date: 6/14/17
 * Time: 6:43 PM
 */
class ContactController extends Controller
{
    public function create(Request $request)
    {
        $contact = new Contact();

        return $contact->create($request->all());
    }

    public function read($id = null)
    {
        $contact = new Contact();

        if (isset($id))
        {
            return $contact->read($id);
        }
        else
        {
            return $contact->search();
        }
    }

    public function update(Request $request, $id)
    {
        $contact = new Contact();

        return $contact->update($id, $request->all());
    }

    public function destroy($id)
    {
        $contact = new Contact();

        return $contact->destroy($id);
    }
}