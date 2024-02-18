<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductsCollection;

class ProductsController extends Controller
{
    public function __construct(){
        // $this->middleware('auth',['except'=>['index','show']]);
        }
       
        /**
        * Display a listing of the resource.
        * *
        @return \Illuminate\Http\Response
        */
        /* public function index(Request $request)
        {
        $products = Product::paginate(6);
        return view('products.index',compact('products'));
        } */

        public function index(Request $request){
            $products = Product::paginate(4);
            /*
            El método wantsJson() devuelve true cuando detecta que el cliente
            hace una petición de datos con estructura json, por lo tanto cuando
            detecte solicitud dicha solicitud el método ejecutará una consulta y
            que dará como resultado una consulta serializada
            */
            if($request->wantsJson()){
           
            /*
            Método de Eloquent que convierte el resultado de una consulta a caden
           a serializada
            */
            return new ProductsCollection($products);
            }
           
            return view('products.index',['products'=>$products]);

        }
       
        /**
        * Show the form for creating a new resource.
        * *
        @return \Illuminate\Http\Response
        */
        public function create()
        {
        //Muestra un formulario para guardar un recurso
        $product = new Product();
        return view('products.create',compact('product'));
        }
        
        /**
 * Store a newly created resource in storage.
 ** @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
 public function store(Request $request)
 {
 $options = [
 'title'=>$request->title,
 'description'=>$request->description,
 'price'=>$request->price
 ];
 if(Product::create($options)){
    return redirect('/productos');
    }else{
    return view('products.create');
    }
    }
   
    /**
    * Display the specified resource.
    * *
    @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    $product = Product::find($id);
    return view('products.show',compact('product'));
    }
   
    /**
    * Show the form for editing the specified resource.
    * *
    @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
    $product = Product::find($id);
    return view("products.edit",compact('product'));
    }
/**
 * Update the specified resource in storage.
 * *
 @param \Illuminate\Http\Request $request* @param int $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
$product = Product::find($id);
$product->title = $request->title;
$product->price = $request->price;
$product->description = $request->description;
if($product->save()){
return redirect('/productos');
}else{
return view("products.edit",compact('product'));
}
}

/**
 * Remove the specified resource from storage.
 * *
 @param int $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
Product::destroy($id);
return redirect('/productos/');
}
    
}
