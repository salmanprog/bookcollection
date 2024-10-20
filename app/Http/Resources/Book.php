<?php

namespace App\Http\Resources;

use App\Helpers\CustomHelper;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use App\Http\Resources\PublicUser;
use App\Http\Resources\Category;

class Book extends JsonResource
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
           'id'               => $this->id,
           'slug'             => $this->slug,
           'title'             => $this->title,
           'image_url'        => !empty($this->image_url) ? Storage::url($this->image_url) : URL::to('images/user-placeholder.jpg'),
           'category_id'           => new Category($this->category),
           'genre'   => $this->genre,
           'publish_date'   => $this->publish_date,
           'author'           => new PublicUser($this->author),
       ];
    }
}
