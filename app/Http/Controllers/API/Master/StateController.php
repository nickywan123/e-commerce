<?php

namespace App\Http\Controllers\API\Master;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;

use App\Http\Resources\State\State as StateResource;
use App\Http\Resources\State\StateCollection as StateCollectionResource;
use App\Models\Globals\State;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StateController extends ResponseController
{
    /**
     * @OA\Get(
     *      path="/api/globals/states",
     *      tags={"Globals"},
     *      summary="Get list of states",
     *      description="Returns list of states",
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  type="array",
     *                  @OA\Items(
     *                      type="object",
     *                      @OA\Property(
     *                          property="id",
     *                          type="integer",
     *                          example="1",
     *                      ),
     *                      @OA\Property(
     *                          property="name",
     *                          type="string",
     *                          example="Johor",
     *                      ),
     *                      @OA\Property(
     *                          property="abbr",
     *                          type="string",
     *                          example="JHR",
     *                      ),
     *                  ),
     *              ),
     *          ),
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          ),
     *      ),
     * ),
     */
    public function getStates()
    {
        try {
            $states = new StateCollectionResource(State::all());

            return $this->sendResponse($states);
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }
}
