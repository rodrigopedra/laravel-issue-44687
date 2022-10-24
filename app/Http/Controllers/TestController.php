<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @param TestRequest $request
     * @return array
     */
    public function test(TestRequest $request): array
    {
        return $request->all();
    }
}
