<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    
public $fillable = ['question','description','answer'];

/*
Verifica a qué método del controlador resource debe enviar el action del
form, en caso de que se envíe un id este realizará una redirección al
método update,en caso contrario realizará una redirección al método store
*/
public function url(){
return $this->id ? 'admin.faq.update': 'admin.faq.store';
}

public function method(){
    return $this->id ? 'PUT': 'POST';
    }
    

}

