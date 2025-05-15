<?php
namespace App\Filament\Resources\LembagaResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\LembagaResource;
use App\Filament\Resources\LembagaResource\Api\Requests\CreateLembagaRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = LembagaResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Lembaga
     *
     * @param CreateLembagaRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateLembagaRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}