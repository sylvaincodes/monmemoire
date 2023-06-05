<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;
use App\Models\User;
use App\Models\Filiere;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function __construct(UserRepository $userRepository)
    {
        $this->UserRepository = $userRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->UserRepository->all();
        $filieres = Filiere::all();
        return view('back.tables.users.index', compact('users', 'filieres'));
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
     * @param  App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $validations = $request->validated();

        $request->merge([
            'password' => \Hash::make($request->password),
        ]);

        $user = User::create($request->all());

        // Notification view
        notify()->success(__('alerts.success_save'), __('alerts.success_title'));

        //logging
        \Log::channel('back')->info(__('messages.create'), ['user_id' => $user->id]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $filieres = Filiere::all();
        return view('back.forms.users.show', compact('user', 'filieres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $filieres = Filiere::all();
        return view('back.forms.users.edit', compact('user', 'filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validation = $request->validated();

        $request->merge([
            'password' => \Hash::make($request->password),
        ]);

        $user->update($request->except('_token'));

        // Notification view
        notify()->success(__('alerts.success_save'), __('alerts.success_title'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $update = \DB::table('users')
            ->where('id', $user->id)
            ->update($request->only('status', 'libelle'));

        // Notification view
        notify()->success(__('alerts.success_update'), __('alerts.success_title'));

        return redirect()->back();
    }


    /**
     * search the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function ajaxSearchUser(Request $request)
    {

        $users = \DB::table('users')
            ->where('nom', 'LIKE', '%' . $request->search . '%')
            ->orWhere('prenom', 'LIKE', '%' . $request->search . '%')
            ->where('status', 'actif')
            ->get();

        return json_encode($users);

    }
}