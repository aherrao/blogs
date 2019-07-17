<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckAdmin;
use App\Http\Requests\CreateUserDetail;
use App\Http\Requests\UpdateUserDetail;
use App\Models\User\UserModel;
use App\Models\UserDetail\UserDetailModel;
use App\Models\UserType\UserTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    private $userModel;

    private $userTypeModel;

    private $userDetailModel;

    protected $users;

    protected $userDetails;

    protected $userTypes;

    public function __construct(UserModel $userModel, UserDetailModel $userDetailModel, UserTypeModel $userTypeModel)
    {
       $this->middleware(CheckAdmin::class, ['only' => ['create', 'store', 'edit', 'update', 'delete']]);

        $this->userModel = $userModel;
        $this->userDetailModel = $userDetailModel;
        $this->userTypeModel = $userTypeModel;

        $this->users = $this->userModel->pluck('name', 'id')->toArray();

        $this->userTypes = $this->userTypeModel->pluck('name', 'id')->toArray();

        parent::__construct();
    }

    public function index(Request $request)
    {
        $this->userDetails = $this->userDetailModel->fetchUserDetailsWithPaginate($request);

        return view('users.index')->withUserDetails($this->userDetails)->withUserTypes($this->userTypes);
    }

    public function create()
    {
        return view('users.create')->withUsers($this->users)->withUserTypes($this->userTypes);
    }

    public function store(CreateUserDetail $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();
        $input['updated_by'] = auth()->id();

        if ($this->userDetailModel->create($input)) {
            Session::flash('flash_message', 'User details created successfully.');
            return redirect()->route('users.index');
        }

        return redirect()->back();
    }

    public function show($id)
    {
        $userDetail = $this->userDetailModel->find($id);

        return view('users.show')
            ->withUserDetail($userDetail)
            ->withUsers($this->users)
            ->withUserTypes($this->userTypes);
    }

    public function edit($id)
    {
        $userDetail = $this->userDetailModel->find($id);

        return view('users.edit')
            ->withUserDetail($userDetail)
            ->withUsers($this->users)
            ->withUserTypes($this->userTypes);
    }

    public function update(UpdateUserDetail $request, $id)
    {
        $input = $request->all();
        $input['updated_by'] = auth()->id();

        $userDetail = $this->userDetailModel->findOrFail($id);

        if ($userDetail->fill($input)->save()) {
            Session::flash('flash_message', 'User details updated successfully.');
            return redirect()->route('users.index');
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}