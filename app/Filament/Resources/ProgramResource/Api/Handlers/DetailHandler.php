<?php

namespace App\Filament\Resources\ProgramResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\ProgramResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\ProgramResource\Api\Transformers\ProgramTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = ProgramResource::class;


    /**
     * Show Program
     *
     * @param Request $request
     * @return ProgramTransformer
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

        return new ProgramTransformer($query);
    }
}
