<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserseatRequest;
use App\Http\Requests\UpdateUserseatRequest;
use App\Repositories\UserseatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Userseat;
use App\Models\User;
use App\Http\Resources\Userseat as UserseatResource;
use App\Http\Resources\UserseatCollection as UserseatResourceCollection;


class UserseatController extends AppBaseController
{
    /** @var  UserseatRepository */
    private $userseatRepository;

    public function __construct(UserseatRepository $userseatRepo)
    {
        $this->userseatRepository = $userseatRepo;
    }

    /**
     * Display a listing of the Userseat.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userseatRepository->pushCriteria(new RequestCriteria($request));
        $userseats = $this->userseatRepository->all();
        $users=User::all();

        if($request->expectsJson()){
            return new UserseatResourceCollection($users);
        }
        return view('userseats.index')->with('userseats', $userseats)->with('users', $users);
        
    }

    /**
     * Show the form for creating a new Userseat.
     *
     * @return Response
     */
    public function create()
    {
        $users=User::all();
        return view('userseats.create')->with('users', $users);
    }

    /**
     * Store a newly created Userseat in storage.
     *
     * @param CreateUserseatRequest $request
     *
     * @return Response
     */
    public function store(CreateUserseatRequest $request)
    {
        $input = $request->all();
        $users=User::all();

        $userseat = $this->userseatRepository->create($input);

        if($request->expectsJson()){
            return new UserseatResourceCollection($userseat);
        }

        Flash::success('Userseat saved successfully.');
        return redirect(route('userseats.index'))->with('users', $users);
        
    }

    /**
     * Display the specified Userseat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id, Request $request)
    {
        $userseat = $this->userseatRepository->findWithoutFail($id);

        if (empty($userseat)) {
            Flash::error('Userseat not found');

            return redirect(route('userseats.index'));
        }

        if($request->expectsJson()){
            return new UserseatResourceCollection($userseat);
        }

        return view('userseats.show')->with('userseat', $userseat);
    }

    /**
     * Show the form for editing the specified Userseat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userseat = $this->userseatRepository->findWithoutFail($id);

        if (empty($userseat)) {
            Flash::error('Userseat not found');

            return redirect(route('userseats.index'));
        }

        return view('userseats.edit')->with('userseat', $userseat);
    }

    /**
     * Update the specified Userseat in storage.
     *
     * @param  int              $id
     * @param UpdateUserseatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserseatRequest $request)
    {
        $userseat = $this->userseatRepository->findWithoutFail($id);

        if (empty($userseat)) {
            Flash::error('Userseat not found');

            return redirect(route('userseats.index'));
        }

        $userseat = $this->userseatRepository->update($request->all(), $id);

        if($request->expectsJson()){
            return new UserseatResourceCollection($userseat);
        }
        Flash::success('Userseat updated successfully.');

        return redirect(route('userseats.index'));
    }

    /**
     * Remove the specified Userseat from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userseat = $this->userseatRepository->findWithoutFail($id);

        if (empty($userseat)) {
            Flash::error('Userseat not found');

            return redirect(route('userseats.index'));
        }

        $this->userseatRepository->delete($id);

        Flash::success('Userseat deleted successfully.');

        return redirect(route('userseats.index'));
    }
}
