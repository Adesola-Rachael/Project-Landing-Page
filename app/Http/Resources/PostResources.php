<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResources extends JsonResource
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
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'content'=>$this->content,
            'post_image'=>$this->post_image,
            'uploader_image'=>$this->uploader_image,
            'uploader_name'=>$this->uploader_name
        ];
    }
}
