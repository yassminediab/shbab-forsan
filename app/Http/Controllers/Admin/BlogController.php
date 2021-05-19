<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use App\Tag;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogsRequest;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\Facades\DataTables;
use App\Service\Image;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::latest()->select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '
                           <ul class="list-inline">
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/blogs/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/blogs/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.blogs.index', [
            'modelName' => 'blogs',
            'pageTitle' => 'Blogs'
        ]);
    }
    public function show($id)
    {
        return Blog::find($id)->description;
    }
    public function create()
    {
        return view('admin.blogs.create', [
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function store(BlogsRequest $request)
    {
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);
        $request['image'] = $imageName;

        $request->content_ar = editorContent($request->content_ar);

        $request->content_en = editorContent($request->content_en);

        Blog::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'categories_id' => $request->categories_id,
            'tags_id' => $request->tags_id,
            'image' => $imageName,
        ]);

        return redirect('/admin/blogs')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog->image = resizeImage($blog->image, 50, 20);

        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token', 'file', 'files');
        if ($request->file) {
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $data['content_ar'] = editorContent($request->content_ar);

        $data['content_en'] = editorContent($request->content_en);


        Blog::where('id', $request->id)->update($data);
        return redirect('/admin/blogs')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Blog::find($id)->delete();
        return redirect('/admin/blogs')->with('success', 'deleted Successfully!');
    }
}
