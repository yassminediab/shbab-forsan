<?php

namespace App\Http\Controllers\Admin;

use App\CaseModel as Model;
use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CaseController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/cases/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/cases/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.cases.index', [
            'modelName' => 'cases',
            'pageTitle' => 'Cases'
        ]);
    }
    public function show($id)
    {
        return Model::find($id)->description;
    }
    public function create()
    {
        return view('admin.cases.create');
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
            'content_ar' => $request->content_ar,
            'target_share' => $request->target_share,
            'image' => $imageName,
        ]);

        return redirect('/admin/cases')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $case = Model::find($id);

        return view('admin.cases.edit', [
            'case' => $case,
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
        return redirect('/admin/cases')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/cases')->with('success', 'deleted Successfully!');
    }
}
