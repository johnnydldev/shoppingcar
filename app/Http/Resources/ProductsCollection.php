<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request){
        //returnparent::toArray($request);
        return[
                'data'=> $this->collection->transform(function($element){
            return[
            'name'=>$element->name,
            'id'=>$element->id,
            'humanPrice'=>"$".($element->price/100),
            'numberPrice'=>$element->price,
            'image'=>$element->image_url,
            'description'=>$element->description
                 ];
            })
        ];
    }



    
}
