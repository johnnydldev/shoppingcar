<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function brand()
 {
 return $this->belongsTo(Brand::class);
 }

 public function categories()
 {
 return $this->belongsToMany(Category::class);
 }

public $fillable = ['name','slug','price','qty','description'];

/*
Verifica a qué método del controlador resource debe enviar el action del
form, en caso de que se envíe un id este realizará una redirección al
método update,en caso contrario realizará una redirección al método store
*/
public function url(){
return $this->id ? 'productos.update': 'productos.store';
}

public function method(){
    return $this->id ? 'PUT': 'POST';
    }
    

}

