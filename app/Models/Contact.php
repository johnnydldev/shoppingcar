<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
 
    /*$fillable permite especificar qué datos se asignarán al modelo en
     los métodos en los que se usan 'asignamientos en masa'.*/
   
     public $fillable = ['email','name','lastname','description'];

    /*Verifica a quémétodo del controlador resource debe enviar el action del form, 
    en caso de que se envíe un id este realizará una redirección al método update,
    en caso contrario realizará una redirección al método store*/
    
    public function url(){
    return $this->id ? 'contacto.update': 'contacto.store';
    }

    /*Verifica a que método de envío que utilizará elform,en caso de que se envíe un id,
    éste enviará los datos mediantePUT, en caso contrario enviará los datos por medio dePOST*/
    
    public function method(){
    return $this->id ? 'PUT': 'POST';
    }

    use HasFactory;
}
