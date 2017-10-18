<?php

namespace App\Models\Crm;


use App\Models\Model;

/**
 * @SWG\Definition(required={"contact_id", "street_1", "city", "state", "postal_code", "country"}, type="object", @SWG\Xml(name="Address"))
 */
class Address extends Model
{
    /**
     * @SWG\Property()
     * @var string
     */
    public $contact_id;
    /**
     * @SWG\Property()
     * @var string
     */
    public $street_1;
    /**
     * @SWG\Property()
     * @var string
     */
    public $street_2;
    /**
     * @SWG\Property()
     * @var string
     */
    public $city;
    /**
     * @SWG\Property()
     * @var string
     */
    public $state;
    /**
     * @SWG\Property()
     * @var string
     */
    public $postal_code;
    /**
     * @SWG\Property()
     * @var string
     */
    public $country;

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
            'contact_id' => null,
            'street_1' => null,
            'street_2' => null,
            'city' => null,
            'state' => null,
            'postal_code' => null,
            'country' => null
        ];
    }
}