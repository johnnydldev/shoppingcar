<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

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

        public function index()
        {
 
        $products = Product::paginate(6);
        return view('admin.products.index',compact('products'));
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
        return view('admin.products.create',compact('product'));
        }
        
        /**
 * Store a newly created resource in storage.
 ** @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
 public function store(Request $request)
 {
 $options = [
 'name'=>$request->name,
 'qty'=>$request->qty,
 'price'=>$request->price,
 'description'=>$request->description
 ];
 if(Product::create($options)){
    return redirect('/productos');
    }else{
    return view('admin.products.create');
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
    return view('admin.products.show',compact('product'));
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
    return view("admin.products.edit",compact('product'));
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
$product->name = $request->name;
$product->qty = $request->qty;
$product->price = $request->price;
$product->description = $request->description;
if($product->save()){
return redirect('/productos');
}else{
return view("admin.products.edit",compact('product'));
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
return redirect('/productos');
}

}