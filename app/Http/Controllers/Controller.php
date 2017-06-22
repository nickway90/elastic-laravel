<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Model
     */
    private $model;

    abstract function getModel();

    public function __construct()
    {
        $model = $this->getModel();

        $this->model = new $model();
    }

    public function create(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function read($id = null)
    {
        if (isset($id))
        {
            return $this->model->read($id);
        }
        else
        {
            return $this->model->search();
        }
    }

    public function update(Request $request, $id)
    {
        return $this->model->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}
