<?php
namespace App\Filament\Resources\BookmarkResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Bookmark;

/**
 * @property Bookmark $resource
 */
class BookmarkTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
