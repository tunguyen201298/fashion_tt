<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Validators\RegisterValidator;
use App\Repositories\RoleRepository;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var RoleRepository
     */
    protected $roleRepository;
    /**
     * @var RoleRepository
     */
    protected $registerValidator;

    /**
     * @var UserValidator
     */
    protected $validator;

    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */
    public function __construct(UserRepository $repository, UserValidator $validator, RegisterValidator $registerValidator, RoleRepository $roleRepository)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->registerValidator  = $registerValidator;
        $this->roleRepository = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $title = 'Đăng nhập';
        return view('admin.accounts.login', compact('title'));
    }
    public function checkLogin(LoginRequest $request)
    {
        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            $emailVerified = $this->repository->findByField('email',$request->email);
            dd($emailVerified);
            if ($active->decentralization == 1) {
               return redirect(url('/admin'));
            }else{
                return redirect()->back()->with('messenger', 'Quyền truy cập bị từ chối');
            }
        } else {
            dd('NULL');
            return redirect()->back()->with('messenger', 'Đăng nhập thất bại');
        }
    }
    public function register()
    {
        $title = 'Đăng ký';
        return view('admin.accounts.register', compact('title'));
    }
    public function registerStore(RegisterRequest $request)
    {
        
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'phone' => $request->phone,
                'role_id' => $request->role_id,
                'birth_date' => $request->birth_date
            ]);
            
            $response = [
                'message' => 'Đăng ký tài khoản thành công',
                'data'    => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
    public function forgotPassword()
    {
        $title = 'Quên mật khẩu';
        return view('admin.accounts.forgot_password', compact('title'));
    }
}
