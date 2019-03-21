<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsersubRequest;
use App\Http\Requests\UpdateUsersubRequest;
use App\Repositories\UsersubRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Usersub;
use App\Models\User;
use App\Http\Resources\Usersub as UsersubResource;
use App\Http\Resources\UsersubCollection as UsersubResourceCollection;


class UsersubController extends AppBaseController
{
    /** @var  UsersubRepository */
    private $usersubRepository;

    public function __construct(UsersubRepository $usersubRepo)
    {
        $this->usersubRepository = $usersubRepo;
    }

    /**
     * Display a listing of the Usersub.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usersubRepository->pushCriteria(new RequestCriteria($request));
        $usersubs = $this->usersubRepository->all();
        $users=User::all();

        if($request->expectsJson()){
            return new UsersubResourceCollection($usersubs);
        }else{
        return view('usersubs.index')
            ->with('usersubs', $usersubs)
            ->with('users', $users);
        }
    }

    /**
     * Show the form for creating a new Usersub.
     *
     * @return Response
     */
    public function create()
    {
        return view('usersubs.create');
    }

    /**
     * Store a newly created Usersub in storage.
     *
     * @param CreateUsersubRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersubRequest $request)
    {
        $input = $request->all();
        $users=User::all();
        $usersub = $this->usersubRepository->create($input);

        Flash::success('Usersub saved successfully.');

        return redirect(route('usersubs.index'))->with('users', $users);
    }

    /**
     * Display the specified Usersub.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usersub = $this->usersubRepository->findWithoutFail($id);

        if (empty($usersub)) {
            Flash::error('Usersub not found');

            return redirect(route('usersubs.index'));
        }

        return view('usersubs.show')->with('usersub', $usersub);
    }

    /**
     * Show the form for editing the specified Usersub.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usersub = $this->usersubRepository->findWithoutFail($id);

        if (empty($usersub)) {
            Flash::error('Usersub not found');

            return redirect(route('usersubs.index'));
        }

        return view('usersubs.edit')->with('usersub', $usersub);
    }

    /**
     * Update the specified Usersub in storage.
     *
     * @param  int              $id
     * @param UpdateUsersubRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersubRequest $request)
    {
        $usersub = $this->usersubRepository->findWithoutFail($id);

        if (empty($usersub)) {
            Flash::error('Usersub not found');

            return redirect(route('usersubs.index'));
        }

        $usersub = $this->usersubRepository->update($request->all(), $id);

        Flash::success('Usersub updated successfully.');

        return redirect(route('usersubs.index'));
    }

    /**
     * Remove the specified Usersub from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usersub = $this->usersubRepository->findWithoutFail($id);

        if (empty($usersub)) {
            Flash::error('Usersub not found');

            return redirect(route('usersubs.index'));
        }

        $this->usersubRepository->delete($id);

        Flash::success('Usersub deleted successfully.');

        return redirect(route('usersubs.index'));
    }
}
