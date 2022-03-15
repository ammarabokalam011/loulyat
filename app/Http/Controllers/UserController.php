<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Response;

class UserController extends AppBaseController
{

    /** @var userRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();
        return view('users.index')
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new category.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created category in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $password=Str::random(10);
        $input['password']=$password;
        $user = $this->userRepository->create($input);

        Flash::success('User saved successfully.<br>the new passsword is '.$password);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user',$user);
    }


    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $input = $request->all();
        $user = $this->userRepository->update($input,$id);
        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }


    public function destroy($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }


    public function rest($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $password=Str::random(10);
        $this->userRepository->update(['password'=>Hash::make($password)],$id);
        Flash::success('User Rested successfully.<br>the new passsword is '.$password);
        return redirect(route('users.index'));
    }

}
