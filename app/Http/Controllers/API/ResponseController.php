<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Bujishu Open API Documentation",
 *      description="Bujishu Swagger Open API Document",
 *      @OA\Contact(
 *          email="wanshahruddin95@gmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Bujishu E-Commerce"
 * )
 * 
 * @OA\Tag(
 *      name="Globals",
 *      description="API Endpoints for resources that doesn't belongs to any one tags",
 * ),
 *
 * @OA\Tag(
 *     name="Categories",
 *     description="API Endpoints of Categories"
 * )
 * 
 * @OA\Tag(
 *      name="Products",
 *      description="API Endpoint of Products"
 * )
 */
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
}
