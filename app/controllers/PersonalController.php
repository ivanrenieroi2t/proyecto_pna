<?php

class PersonalController extends BaseController{

	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $personal = Personal::all();
        return View::make('personal.index')->with('personal',$personal);
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