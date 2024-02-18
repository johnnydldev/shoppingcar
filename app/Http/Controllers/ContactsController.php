<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Resources\ContacsCollection;

class ContactsController extends Controller
{

    
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        /*ElmétodowantsJson()devuelvetruecuandodetectaque
        elclientehaceunapeticióndedatosconestructurajson,
        porlotantocuandodetectesolicituddichasolicitude
        métodoejecutaráunaconsultayquedarácomoresultado
        unaconsultaserializada*/
        $contacts= Contact::paginate(2);

        if($request->wantsJson())
        {
        return $contacts->toJson();
        }
        return view('contacts.index',compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts =new Contact();
        return view('contacts.create',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options=[
            'email'=>$request->email,
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'description'=>$request->description];
        if(Contact::create($options)){
            return redirect('/contacto');}
        else{ 
            return view('contacts.nuevo');
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
        $contact = Contact::find($id);
        return view('contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view("contacts.edit",compact('contact'));
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
        $contact = Contact::find($id);
        $contact->email=$request->email;
        $contact->name=$request->name;
        $contact->lastname=$request->lastname;
        $contact->description=$request->description;

        if($contact->save()){
            return redirect('/contacto');
        }else{
            return view("contacts.editar",compact('contacts'));
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
        Contact::destroy($id);
        return redirect('/contacto/');
    }
}
