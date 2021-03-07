<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\VolunteerSection as Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VolunteerSectionController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/volunteer/section/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.volunteerSection.index', [
            'pageTitle' => 'volunteer/section',
            'modelName' => 'volunteer/section',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.volunteerSection.create');
    }

    public function store(Request $request)
    {
        $request->content_ar = editorContent($request->content_ar);

        $request->content_en = editorContent($request->content_en);

        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
        ]);
        return redirect('/admin/volunteer/section')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $volunteerSection = Model::find($id);
        $volunteerSection->image = resizeImage($volunteerSection->image, 1905, 510);

        return view('admin.volunteerSection.edit', [
            'volunteerSection' => $volunteerSection
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

        return redirect('/admin/volunteer/section')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/volunteer/section')->with('success', 'deleted Successfully!');
    }
}
