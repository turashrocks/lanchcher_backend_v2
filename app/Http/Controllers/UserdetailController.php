<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserdetailRequest;
use App\Http\Requests\UpdateUserdetailRequest;
use App\Repositories\UserdetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserdetailController extends AppBaseController
{
    /** @var  UserdetailRepository */
    private $userdetailRepository;

    public function __construct(UserdetailRepository $userdetailRepo)
    {
        $this->userdetailRepository = $userdetailRepo;
    }

    /**
     * Display a listing of the Userdetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userdetailRepository->pushCriteria(new RequestCriteria($request));
        $userdetails = $this->userdetailRepository->all();

        return view('userdetails.index')
            ->with('userdetails', $userdetails);
    }

    /**
     * Show the form for creating a new Userdetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('userdetails.create');
    }

    /**
     * Store a newly created Userdetail in storage.
     *
     * @param CreateUserdetailRequest $request
     *
     * @return Response
     */
    public function store(CreateUserdetailRequest $request)
    {
        $input = $request->all();

        $userdetail = $this->userdetailRepository->create($input);

        Flash::success('Userdetail saved successfully.');

        return redirect(route('userdetails.index'));
    }

    /**
     * Display the specified Userdetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userdetail = $this->userdetailRepository->findWithoutFail($id);

        if (empty($userdetail)) {
            Flash::error('Userdetail not found');

            return redirect(route('userdetails.index'));
        }

        return view('userdetails.show')->with('userdetail', $userdetail);
    }

    /**
     * Show the form for editing the specified Userdetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userdetail = $this->userdetailRepository->findWithoutFail($id);

        if (empty($userdetail)) {
            Flash::error('Userdetail not found');

            return redirect(route('userdetails.index'));
        }

        return view('userdetails.edit')->with('userdetail', $userdetail);
    }

    /**
     * Update the specified Userdetail in storage.
     *
     * @param  int              $id
     * @param UpdateUserdetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserdetailRequest $request)
    {
        $userdetail = $this->userdetailRepository->findWithoutFail($id);

        if (empty($userdetail)) {
            Flash::error('Userdetail not found');

            return redirect(route('userdetails.index'));
        }

        $userdetail = $this->userdetailRepository->update($request->all(), $id);

        Flash::success('Userdetail updated successfully.');

        return redirect(route('userdetails.index'));
    }

    /**
     * Remove the specified Userdetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userdetail = $this->userdetailRepository->findWithoutFail($id);

        if (empty($userdetail)) {
            Flash::error('Userdetail not found');

            return redirect(route('userdetails.index'));
        }

        $this->userdetailRepository->delete($id);

        Flash::success('Userdetail deleted successfully.');

        return redirect(route('userdetails.index'));
    }
}
