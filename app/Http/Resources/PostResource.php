<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $rumus = 5 * 5;
        return [ //ini adalah data yang akan di tampilkan(bisa menambahkan data baru apa saja seenak kita)
            "id"/*ini key nya*/ => $this->id /*ini isi dari keynya*/,
            "title" => $this->title,
            "news_content" => $this->news_content,
            "created_at" => date_format($this->created_at,"Y/m/d")
            // "rumus" => $rumus // apabila menggunakan php resource juga bisa menampilkan variable apa saja 
        ];
    }
}
