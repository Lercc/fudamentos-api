<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'número'                => $this->id,
            'título'                => $this->title,
            'contenido'             => $this->body,
            'creado_hace'           => $this->created_at->diffForHumans(),
            'fecha_creación'        => $this->created_at->format('d-m-Y'),
            'fecha_actualización'   => $this->updated_at->format('d-m-Y'),
        ];
    }
}
