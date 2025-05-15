<?php

namespace App\Filament\Resources\LembagaResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\LembagaResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\LembagaResource\Api\Transformers\LembagaTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = LembagaResource::class;


    /**
     * Show Lembaga
     *
     * @param Request $request
     * @return LembagaTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new LembagaTransformer($query);
    }
}
