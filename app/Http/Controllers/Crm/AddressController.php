<?php

namespace App\Http\Controllers\Crm;

use App\Http\Controllers\Controller;
use App\Models\Crm\Address;
use App\Models\Model;

class AddressController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/address",
     *     summary="Queries all addresses",
     *     tags={"address"},
     *     description="Queries all address with no restrictions.",
     *     operationId="index",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Addresses"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Get(
     *     path="/address/{id}",
     *     summary="Queries a address",
     *     tags={"address"},
     *     description="Queries for a specific address by it's ID.",
     *     operationId="read",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of address to return",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Address details"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error querying the address"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Address not found"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Post(
     *     path="/address",
     *     summary="Creates a address",
     *     tags={"address"},
     *     description="Creates a new address.",
     *     operationId="create",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="Address details",
     *         in="body",
     *         required=true,
     *         name="body",
     *         @SWG\Schema(ref="#/definitions/Address")
     *     ),
     *     @SWG\Response(
     *         response=201,
     *         description="Created address result"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error creating the address"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Put(
     *     path="/address/{id}",
     *     summary="Updates a address",
     *     tags={"address"},
     *     description="Updates a address.",
     *     operationId="update",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of address to update",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Parameter(
     *         description="Address details",
     *         in="body",
     *         required=true,
     *         name="body",
     *         @SWG\Schema(ref="#/definitions/Address")
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Updated address result"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error updating the address"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Address not found"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * ),
     * @SWG\Delete(
     *     path="/address/{id}",
     *     summary="Deletes a address",
     *     tags={"address"},
     *     description="Deletes a address.",
     *     operationId="delete",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of address to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Address delete response"
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Error deleting the address"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Address not found"
     *     ),
     *     @SWG\Response(
     *         response=503,
     *         description="ElasticSearch is not running"
     *     )
     * )
     */
    
    public function getModel(): Model
    {
        return new Address();
    }
}