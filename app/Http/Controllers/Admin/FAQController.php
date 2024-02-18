<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
    $faqs = FAQ::paginate(6);
    return view('admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //
    //Muestra un formulario para guardar un recurso
     $faq = new FAQ();
        return view('admin.faq.create',compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //
        $options = [
        'question'=>$request->question,
        'description'=>$request->description,
        'answer'=>$request->answer
        ];
        if(FAQ::create($options)){
                return redirect('/faq');
        }else{
        return view('admin.faq.create');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //
    $faq = FAQ::find($id);
    return view("admin.faq.edit",compact('faq'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
 {
 //
 $faq = FAQ::find($id);
 $faq->question = $request->question;
 $faq->description = $request->description;
 $faq->answer = $request->answer;
 if($faq->save()){
 return redirect('/faq');
 }else{
 return view("admin.faq.edit",compact('faq'));
 }
 }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FAQ::destroy($id);
        return redirect('/faq');
    }
}
