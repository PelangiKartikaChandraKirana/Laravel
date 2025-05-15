<?php

namespace App\Filament\Resources\BookmarkResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\BookmarkResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\BookmarkResource\Api\Transformers\BookmarkTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = BookmarkResource::class;


    /**
     * Show Bookmark
     *
     * @param Request $request
     * @return BookmarkTransformer
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

        return new BookmarkTransformer($query);
    }
}
