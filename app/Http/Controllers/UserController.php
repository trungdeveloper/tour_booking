<?php

namespace App\Http\Controllers;

use App\User;
use App\Title;
use App\IdentificationType;
use App\UserType;
use App\Country;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkIfAllowed', ['except' => ['create', 'edit', 'store', 'update']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTypes = UserType::with(['users' => function ($user) { $user->orderBy('first_name'); }])
        ->orderBy('id')
        ->get();
        return view('user/index', compact('userTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $userTypes = UserType::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $titles = Title::orderBy('id')->get();
        $identificationTypes = IdentificationType::orderBy('id')->get();
        return view('user/create', compact('user', 'userTypes', 'countries', 'identificationTypes', 'titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        
        $validator = Validator::make($request->all(), $user->rules(), $user->messages);

        if ($validator->fails()) {
          return redirect()->route('users.create')->withErrors($validator)->withInput();
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return Auth::check() ?
            redirect()->route('users.index')->with('success','Add success!') :
            redirect()->route('login')->with('success','Add success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user/show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $userTypes = UserType::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $titles = Title::orderBy('id')->get();
        $identificationTypes = IdentificationType::orderBy('id')->get();
        return view('user/edit', compact('user', 'userTypes', 'countries', 'identificationTypes', 'titles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        if (!Auth::check()) {

          return view('forbidden');
        
        } elseif (Auth::user()->hasAdminRights()) {

        } elseif (Auth::id() != $user->id) {

          return view('forbidden');

        }


        if (strlen($request->password) > 0) {
        
          $validator = Validator::make($request->all(), $user->rules(), $user->messages);

          if ($validator->fails()) {
            return redirect()->route('users.edit', $user->id)->withErrors($validator)->withInput();
          }

          $request->merge(['password' => Hash::make($request->password)]);

        } else {

          $request->offsetUnset('password');

        }


        $user->update($request->all());


        // if user has admin rights and is not editing him/herself
        return Auth::check() && Auth::user()->hasAdminRights() && Auth::id() != $user->id ?
            redirect()->route('users.index')->with('success','Successfully updated!') :
            redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return 'ok';
    }
}
