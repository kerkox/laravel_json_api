<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection As BaseResourceCollection;

class ResourceCollection extends BaseResourceCollection
{

    public $collects = ResourceObject::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => ResourceObject::collection($this->collection),
//            'data' => $this->collection
        ];
    }
}
