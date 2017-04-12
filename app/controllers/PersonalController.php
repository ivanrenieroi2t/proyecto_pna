<?php

class PersonalController extends BaseController{

	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //levanto todos los registros de la DB. 
        $personal = Personal::all();
        return View::make('personal.index')->with('personal',$personal);
        //Otras maneras de enviar datos a las vistas 
        //Considerando que en la vista tenemos una variable $personal (seria la key del array)
        //return View::make('personal.index',array('personal'=>$personal));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //Validacion
        $rules = array(
            'nombre'=>'required|string',
            'apellido'=>'required|string',
            'direccion'=>'required|string',
            'telefono'=>'required|numeric',
            'celular'=>'required|numeric'
            );
        $messages = array(
            'string' => 'El campo :attribute no permite números',
            'numeric' => 'El campo :attribute solo permite números',
            'required' => 'El campo :attribute no puede estar vacío'
            );
        $input = array(
            'nombre'=> Input::get('nombre'),
            'apellido'=> Input::get('apellido'),
            'direccion'=> Input::get('direccion'),
            'telefono'=> Input::get('telefono'),
            'celular'=> Input::get('celular')
            );
        $validator = Validator::make($input,$rules,$messages);

        if ($validator->fails()) {
            return Redirect::to('personal/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $personal = new Personal;
            $personal->nombre = Input::get('nombre');
            $personal->apellido = Input::get('apellido');
            $personal->direccion = Input::get('direccion');
            $personal->telefono = Input::get('telefono');
            $personal->celular = Input::get('celular');
            $personal->jerarquia = Input::get('jerarquia');
            $personal->categoria = Input::get('categoria');
            $personal->save();

            // redirect
            Session::flash('message', 'Personal guardado exitosamente!');
            return Redirect::to('personal');
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         // get the nerd
        $personal = Personal::find($id);

        // show the view and pass the nerd to it
        return View::make('personal.show')->with('personal', $personal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);

        return View::make('personal.edit')->with('personal', $personal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
       
            $personal = Personal::find($id);
            $personal->nombre = Input::get('nombre');
            $personal->apellido = Input::get('apellido');
            $personal->direccion = Input::get('direccion');
            $personal->telefono = Input::get('telefono');
            $personal->celular = Input::get('celular');
            $personal->jerarquia = Input::get('jerarquia');
            $personal->categoria = Input::get('categoria');
            $personal->save();

            // redirect
            Session::flash('message', 'Personal actualizado');
            return Redirect::to('personal');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);
        $personal->delete();

        // redirect
        Session::flash('message', 'Personal eliminado');
        return Redirect::to('personal');
    }
	

}

?>