<?php
namespace App\Filament\Resources\ProgramResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\ProgramResource;
use Illuminate\Routing\Router;


class ProgramApiService extends ApiService
{
    protected static string | null $resource = ProgramResource::class;

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
