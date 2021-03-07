<?php

namespace App\Http\Controllers\Admin;

use App\AboutUs as Model;
use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AboutUsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Model::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '
                           <ul class="list-inline">
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/about-us/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.aboutUs.index', [
            'modelName' => 'aboutUs',
            'pageTitle' => 'aboutUs'
        ]);
    }
    public function show($id)
    {
        return Model::find($id)->contact_en;
    }
    public function create()
    {
        return view('admin.aboutUs.create');
    }

    public function store(CaseRequest $request)
    {
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);
        $request['image'] = $imageName;
 
        $request->content_ar = editorContent($request->content_ar);

        $request->content_en = editorContent($request->content_en);

        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_en' => $request->content_en,
            'image' => $imageName,
        ]);

        return redirect('/admin/about-us')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $aboutUs = Model::find($id);
        $aboutUs->image = resizeImage($aboutUs->image, 1905, 510);

        return view('admin.aboutUs.edit', [
            'aboutUs' => $aboutUs,
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

        
        Model::where('id', $request->id)->update($data);
        return redirect('/admin/about-us')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/about-us')->with('success', 'deleted Successfully!');
    }
}
