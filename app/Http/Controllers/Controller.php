<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $modelClass = User::class;

    public function index()
    {
        try {
            $users = $this->modelClass::all();

            /* Pagination */
            $this->pagination($users,);

            /* Sorting */


            /* Filtering fields with eq,lt,gt,like */


            /* columns need to returns */


            /* Date range between */


            return $this->showAll($users);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 404);
        }
    }

    public function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
