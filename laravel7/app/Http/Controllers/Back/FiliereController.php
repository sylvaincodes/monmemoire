<?php

namespace App\Http\Controllers\Back;

use App\Models\Filiere;
use Illuminate\Http\Request;
use App\Http\Controllers\Back\BackController;
use App\Http\Repositories\FiliereRepository;
use App\Http\Requests\StoreFiliereRequest;
use App\Http\Requests\UpdateFiliereRequest;

class FiliereController extends BackController
{

    public function __construct(FiliereRepository $filiereRepository)
    {
        $this->FiliereRepository = $filiereRepository;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = $this->FiliereRepository->all();
        return view('back.tables.filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFiliereRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFiliereRequest $request)
    {
        $request->validated();

        $filiere = Filiere::create($request->all());

        // Notification view
        notify()->success(__('alerts.success_save'), __('alerts.success_title'));

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        return view('back.forms.filieres.show', compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFiliereRequest  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFiliereRequest $request, Filiere $filiere)
    {
        $request->validated();
        $filiere->update($request->except('_token'));
        notify()->success(__('alerts.success_save'), __('alerts.success_title'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Filiere $filiere)
    {

        \DB::table('filieres')
            ->where('id', $filiere->id)
            ->update($request->only('status'));

        notify()->success(__('alerts.success_update'), __('alerts.success_title'));

        return redirect()->back();
    }

    /**
     * search the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function ajaxSearchFiliere(Request $request)
    {

        $filieres = \DB::table('filieres')
            ->where('libelle', 'LIKE', '%' . $request->search . '%')
            ->where('status', 'actif')
            ->get();

        return json_encode($filieres);

    }
}