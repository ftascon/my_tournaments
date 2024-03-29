<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function response($content, $code = 200)
    {
        return response($content)->setStatusCode($code);
    }

    public function responseJson($data, $code = 200)
    {
        return response()->json($data)->setStatusCode($code);
    }
}
