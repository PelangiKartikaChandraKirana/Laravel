<?php
namespace App\Filament\Resources\BookmarkResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\BookmarkResource;
use App\Filament\Resources\BookmarkResource\Api\Requests\CreateBookmarkRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = BookmarkResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Bookmark
     *
     * @param CreateBookmarkRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateBookmarkRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}