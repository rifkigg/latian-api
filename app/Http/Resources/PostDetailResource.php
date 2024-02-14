<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"/*ini key nya*/ => $this->id /*ini isi dari keynya*/,
            "title" => $this->title,
            "news_content" => $this->news_content,
            "created_at" => date_format($this->created_at,"Y/m/d"),
            "author" => $this->author,
            "writer" => $this->whenLoaded('writer')
        ];
    }
}
