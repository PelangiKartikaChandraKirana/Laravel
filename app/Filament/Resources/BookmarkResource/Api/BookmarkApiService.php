<?php
namespace App\Filament\Resources\BookmarkResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\BookmarkResource;
use Illuminate\Routing\Router;


class BookmarkApiService extends ApiService
{
    protected static string | null $resource = BookmarkResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
