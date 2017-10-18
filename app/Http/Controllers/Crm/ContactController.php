<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Crm\Contact;
use App\Models\Model;

class ContactController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/contact",
     *     summary="Queries all contacts",
     *     tags={"contact"},
     *     description="Queries all contacts with no restrictions.",
     *     operationId="index",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Contacts"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Get(
     *     path="/contact/{id}",
     *     summary="Queries a contact",
     *     tags={"contact"},
     *     description="Queries for a specific contact by it's ID.",
     *     operationId="read",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of contact to return",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Contact details"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error querying the contact"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Contact not found"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Post(
     *     path="/contact",
     *     summary="Creates a contact",
     *     tags={"contact"},
     *     description="Creates a new contact.",
     *     operationId="create",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="Contact details",
     *         in="body",
     *         required=true,
     *         name="body",
     *         @SWG\Schema(ref="#/definitions/Contact")
     *     ),
     *     @SWG\Response(
     *         response=201,
     *         description="Created contact result"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error creating the contact"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Put(
     *     path="/contact/{id}",
     *     summary="Updates a contact",
     *     tags={"contact"},
     *     description="Updates a contact.",
     *     operationId="update",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of contact to update",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Parameter(
     *         description="Contact details",
     *         in="body",
     *         required=true,
     *         name="body",
     *         @SWG\Schema(ref="#/definitions/Contact")
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Updated contact result"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error updating the contact"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Contact not found"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Delete(
     *     path="/contact/{id}",
     *     summary="Deletes a contact",
     *     tags={"contact"},
     *     description="Deletes a contact.",
     *     operationId="delete",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of contact to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Contact delete response"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error deleting the contact"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Contact not found"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * )
     */

    public function getModel(): Model
    {
        return new Contact();
    }
}