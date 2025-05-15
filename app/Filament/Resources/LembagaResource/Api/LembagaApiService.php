<?php
namespace App\Filament\Resources\LembagaResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\LembagaResource;
use Illuminate\Routing\Router;


class LembagaApiService extends ApiService
{
    protected static string | null $resource = LembagaResource::class;

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
