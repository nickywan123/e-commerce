<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;

class ResponseController extends Controller
{
    public function sendResponse($response)
    {
        return response()->json($response, 200);
    }


    public function sendError($error, $code = 404)
    {
        $response = [
            'error' => $error,
        ];
        return response()->json($response, $code);
    }


    public function fakeResponse($response)
    {
        return response()->json(
            [
                'id' => '1',
                'name' => 'Pillows',
                'slug' => 'pillows',
                'parent_category_id' => '1',
                'created_at' => '2020-05-04 02:39:44',
                'updated_at' => '2020-05-04 02:39:44',
                'Products' => [
                    'item' => 'phone',
                    'color' => 'black'

                ]
            ],
            [
                'id' => '2',
                'name' => 'Mattress',
                'slug' => 'mattress',
                'parent_category_id' => '2',
                'created_at' => '2020-05-04 02:39:44',
                'updated_at' => '2020-05-04 02:39:44',
                'Products' => [
                    'item' => 'phone',
                    'color' => 'red'

                ]
            ],
            [
                'id' => '3',
                'name' => 'Lighting',
                'slug' => 'lighting',
                'parent_category_id' => '1',
                'created_at' => '2020-05-04 02:39:44',
                'updated_at' => '2020-05-04 02:39:44',
                'Products' => [
                    'item' => 'phone',
                    'color' => 'blue'

                ]
            ]
        );
    }
}
