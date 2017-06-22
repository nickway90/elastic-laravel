<?php
/**
 * Created by PhpStorm.
 * User: jwdepetro
 * Date: 6/14/17
 * Time: 8:37 PM
 */

namespace App\Models;


abstract class Model
{
    abstract function getIndex();

    abstract function getType();

    abstract function getFields();

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

    public function search($body = [])
    {
        $data = $this->getBody(['body' => $body]);

        return \Elasticsearch::search($data);
    }

    public function create($body)
    {
        $data = $this->getBody(['body' => $this->setFields($body)]);

        return \Elasticsearch::index($data);
    }

    public function read($id)
    {
        $data = $this->getBody(['id' => $id]);

        return \Elasticsearch::get($data);
    }

    public function update($id, $body)
    {
        $data = $this->getBody(['id' => $id, 'body' => $this->setFields($body)]);

        return \Elasticsearch::index($data);
    }

    public function destroy($id)
    {
        $data = $this->getBody(['id' => $id]);

        return \Elasticsearch::delete($data);
    }
}