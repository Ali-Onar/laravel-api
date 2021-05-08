<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'overview' => $this->overview,
            'poster' => $this->poster,
            'adult' => $this->adult,
            'url' => route('movies.show', $this->id)
        ];
    }
}
