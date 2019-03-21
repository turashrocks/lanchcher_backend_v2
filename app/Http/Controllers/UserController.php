<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\User;
use App\Models\Role;
use App\Models\Group;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection as UserResourceCollection;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        $roles=Role::all();
        $groups=Group::all();

        if($request->expectsJson()){
            return new UserResourceCollection($users);
        }else{
            return view('users.index')->with('users', $users)->with('roles', $roles)->with('groups', $groups);
        }
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $groups=Group::all();
        $roles=Role::all();

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'user_address'=>'required',
            'role_id'=>'required',
            'group_id'=>'required'
          ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_address = $request->user_address;
        $user->role_id = $request->role_id;
        $user->group_id = $request->group_id;

        if ($user->save()) {
        Flash::success('User saved successfully.');
        return redirect(route('users.index'))->with('roles', $roles)->with('groups', $groups);
        } else {
        Flash::error('User not saved'); 
        return redirect(route('users.create'))->with('roles', $roles)->with('groups', $groups);
        }
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        $groups=Group::all();
        $roles=Role::all();
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user)->with('role', $roles)->with('groups', $groups);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        $roles=Role::all();
        $groups=Group::all();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user)->with('roles', $roles)->with('groups', $groups);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
         $input = $request->all();
         if(!empty($input['password'])){
             $input['password'] = Hash::make($input['password']);
         }

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:8',
            'user_address'=>'required',
            'role_id'=>'required',
            'group_id'=>'required'
          ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user['password'] = Hash::make($user['password']);
        $user->user_address = $request->user_address;
        $user->role_id = $request->role_id;
        $user->group_id = $request->group_id;

        $user->save();

        $user = $this->userRepository->update($input, $id);

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
