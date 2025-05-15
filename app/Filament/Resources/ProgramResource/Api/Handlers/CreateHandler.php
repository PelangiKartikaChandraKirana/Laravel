<?php
namespace App\Filament\Resources\ProgramResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\ProgramResource;
use App\Filament\Resources\ProgramResource\Api\Requests\CreateProgramRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = ProgramResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Program
     *
     * @param CreateProgramRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateProgramRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}