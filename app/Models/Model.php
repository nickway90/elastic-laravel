<?php
/**
 * Created by PhpStorm.
 * User: jwdepetro
 * Date: 6/14/17
 * Time: 8:37 PM
 */

namespace App\Models;

use Elasticsearch\ClientBuilder;

abstract class Model
{
    private $client;

    abstract function getIndex();

    abstract function getType();

    abstract function getFields();

    public function __construct()
    {
        $this->client = ClientBuilder::create()->build();
    }

    private function getBody(array $data)
    {
        return array_merge(
            [
                'index' => $this->getIndex(),
                'type' => $this->getType()
            ],
            $data
        );
    }

    private function setFields(array $data)
    {
        return array_merge($this->getFields(), $data);
    }

    public function index($body = [])
    {
        $data = $this->getBody(['body' => $body]);

        return $this->client->search($data);
    }

    public function create($body)
    {
        $data = $this->getBody(['body' => $this->setFields($body)]);

        $response = $this->client->index($data);

        if (isset($response['created'], $response['_id']) && $response['created'])
        {
            $data = [
                'id' => $response['_id']
            ];

            return response($data, 201);
        }

        return response(null, 400);
    }

    public function read($id)
    {
        $data = $this->getBody(['id' => $id]);

        $response = $this->client->get($data);

        if (isset($response['found'], $response['_source'], $response['_id'], $response['_source']) && $response['found'])
        {
            $data = [
                'id' => $response['_id']
            ];

            foreach ($this->getFields() as $key => $value)
            {
                $data[$key] = $response['_source'][$key];
            }

            return response($data, 200);
        }

        return response(null, 404);
    }

    public function update($id, $body)
    {
        $data = $this->getBody(['id' => $id, 'body' => $this->setFields($body)]);

        $response = $this->client->index($data);

        if (isset($response['result']) && $response['result'] === 'updated')
        {
            return $this->read($id);
        }

        return response(null, 400);
    }

    public function destroy($id)
    {
        $data = $this->getBody(['id' => $id]);

        $response = $this->client->delete($data);

        if (isset($response['result']) && $response['result'] === 'deleted')
        {
            return response(null, 200);
        }

        return response(null, 400);
    }
}