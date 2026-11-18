<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Récupérer les taches de l'utilisateur connecté
        $tasks = auth()->user()->tasks()->get() ;

        return view('tasks.index' , compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Vérification des données
        $data = $request->validate([
            'title' => 'required|string|max:150',//
        ]);

        $data['state'] = false ;

       // Création de la tache en utilisant auth() 
        auth()->user()->tasks()->create($data) ;

      
        //  redirection vers index task
        return redirect()->route('task.index') ;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
     
       auth()->user()->tasks()->findOrFail($task->id)->delete();

       return redirect()->route('task.index') ;


    }
}
