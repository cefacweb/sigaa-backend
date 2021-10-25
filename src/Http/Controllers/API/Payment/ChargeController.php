<?php

namespace Http\Controllers\API\Payment;

use Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Http\Resources\ChargeResource;
use Domain\Entities\Payment\Charge;
use Application\UseCases\Payment\ChargeUser;
use Http\Requests\Payment\StoreChargeRequest;
use Http\Requests\Payment\UpdateChargeRequest;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @OAS\SecurityScheme(
 *      securityScheme="bearerToken",
 *      type="http",
 *      scheme="bearer"
 * )
 */

class ChargeController extends Controller
{
    /**
     *     @OA\Tag(
     *       name="Charges",
     *       description="Charges"
     *     )
     */

    /**
     * @OA\Get(
     *     path="/api/v1/charges",
     *     tags={"Charges"},
     *     security={{"bearerToken":{}}},
     *     @OA\Response(
     *      response="200",
     *      description="Successful operation",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *          schema="charge"
     *      ),
     *     ),
     *     @OA\Response(
     *      response="401",
     *      description="Unauthenticated",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *      ),
     *     )
     * )
     *
     */

    public function index(): AnonymousResourceCollection
    {
        return ChargeResource::collection(Charge::paginate(10));
    }

    public function show(Charge $charge): ChargeResource
    {
        return new ChargeResource($charge);
    }

    public function store(StoreChargeRequest $request): JsonResponse
    {
        $validatedRequest = $request->validated();

        $useCase = new ChargeUser();
        $charge = $useCase($validatedRequest['user_id'], $validatedRequest['value'], $validatedRequest['type']);

        return (new ChargeResource($charge))->response()->setStatusCode(201);
    }

    public function update(Charge $charge, UpdateChargeRequest $request): ChargeResource
    {
        $charge->update($request->validated());

        return new ChargeResource($charge);
    }
}
