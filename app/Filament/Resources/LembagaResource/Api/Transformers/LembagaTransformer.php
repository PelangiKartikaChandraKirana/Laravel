<?php
namespace App\Filament\Resources\LembagaResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Lembaga;

/**
 * @property Lembaga $resource
 */
class LembagaTransformer extends JsonResource
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

        //return [
            //'lembaga_id' => $this->id,
            //'nama_lembaga' => $this->nama_lembaga,
            //'range_harga' => $this->range_harga
        //];
    }
}
