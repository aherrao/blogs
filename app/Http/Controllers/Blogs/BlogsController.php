<?php
namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckAdmin;
use App\Http\Requests\CreateBlog;
use App\Http\Requests\UpdateBlog;
use App\Models\User\UserModel;
use App\Models\Blog\BlogModel;
use App\Models\UserType\UserTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogsController extends Controller
{
    private $userModel;

    private $BlogModel;

    protected $blogs;

    public function __construct(UserModel $userModel, BlogModel $blogModel)
    {
       // $this->middleware(CheckAdmin::class, ['only' => ['create', 'store', 'edit', 'update', 'delete']]);

        $this->userModel = $userModel;
        $this->blogModel = $blogModel;

        parent::__construct();
    }

    public function index(Request $request)
    {
        $this->blogs = $this->blogModel->fetchBlogDetailsWithPaginate($request);

        return view('blogs.index')->withBlogs($this->blogs);
    }

    public function create()
    {
        return view('blogs.create')->withBlogs($this->blogs);
    }

    public function store(CreateBlog $request)
    {
        $input = $request->all();

		$input['slug']		 = str_slug($request->title, '-');
        $input['created_by'] = auth()->id();
        $input['updated_by'] = auth()->id();

        if ($this->blogModel->create($input)) {
            Session::flash('flash_message', 'Blog created successfully.');
            return redirect()->route('blogs.index');
        }

        return redirect()->back();
    }

    public function show($id)
    {
        $blog = $this->blogModel->find($id);

        return view('blogs.show')
            ->withBlog($blog);
    }

    public function edit($id)
    {

        $blog = $this->blogModel->find($id);
	
				
		if( 1 == auth()->user()->userDetail->user_type_id || auth()->id() == $blog->created_by) {
			 return view('blogs.edit')
            ->withBlog($blog);
		}
		
		return redirect('access_denied');
    }

    public function update(UpdateBlog $request, $id)
    {
        $input = $request->all();
        $input['updated_by'] = auth()->id();

        $blog = $this->blogModel->findOrFail($id);

		if(auth()->id() != $blog->created_by) {
			return redirect('access_denied');
		}
		
        if ($blog->fill($input)->save()) {
            Session::flash('flash_message', 'Blog updated successfully.');
            return redirect()->route('blogs.index');
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}