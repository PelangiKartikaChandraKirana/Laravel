<?php
namespace App\Filament\Resources\ProgramResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Program;

/**
 * @property Program $resource
 */
class ProgramTransformer extends JsonResource
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
