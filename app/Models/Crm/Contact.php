<?php

namespace App\Models\Crm;


use App\Models\Model;

/**
 * @SWG\Definition(required={"first_name", "last_name"}, type="object", @SWG\Xml(name="Contact"))
 */
class Contact extends Model
{
    /**
     * @SWG\Property()
     * @var string
     */
    public $first_name;

    /**
     * @SWG\Property()
     * @var string
     */
    public $last_name;

    /**
     * @SWG\Property()
     * @var string
     */
    public $birth_date;

    /**
     * @SWG\Property()
     * @var string
     */
    public $title;

    /**
     * @SWG\Property()
     * @var string
     */
    public $suffix;

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