<?php
namespace App\Filament\Resources\BookmarkResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BookmarkResource;
use App\Filament\Resources\BookmarkResource\Api\Requests\UpdateBookmarkRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = BookmarkResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update Bookmark
     *
     * @param UpdateBookmarkRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateBookmarkRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}