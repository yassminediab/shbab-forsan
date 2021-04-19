<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Problem as Model;
use Yajra\DataTables\Facades\DataTables;

class ProblemController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/problems/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/problems/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.problems.index', [
            'modelName' => 'problems',
            'pageTitle' => 'problems'
        ]);
    }
    public function show($id)
    {
        return Model::find($id)->description;
    }
    public function create()
    {
        return view('admin.problems.create');
    }

    public function store(Request $request)
    {
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);
        $request['icon'] = $imageName;

        $request->content_ar = editorContent($request->content_ar);

        $request->content_en = editorContent($request->content_en);

        $request->long_content_ar = editorContent($request->long_content_ar);

        $request->long_content_en = editorContent($request->long_content_en);

        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'long_content_en' => $request->long_content_en,
            'long_content_ar' => $request->long_content_ar,
            'icon' => $imageName,
            'url' => $request->url
        ]);

        return redirect('/admin/problems')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $problem = Model::find($id);

        return view('admin.problems.edit', [
            'problem' => $problem,
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token', 'file', 'files','photoName');
        if ($request->file) {
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('images'), $imageName);
            $data['icon'] = $imageName;
        }

        $maxIndex = max(array_key_last(($request->photo) ? $request->photo : []) , array_key_last(($request->photoName) ? $request->photoName : []));

        $photo_names = [];
        for($i = 0; $i <= $maxIndex; $i++ ) {
            if (isset($request->photo[$i]) && $request->photo[$i]) {
                $imageName = time().'.'.$request->photo[$i]->getClientOriginalExtension();
                $request->photo[$i]->move(public_path('images'), $imageName);
                $photo_names[] = $imageName;

            }
            elseif(isset($request->photoName[$i])) {
                $imageName = $request->photoName[$i];
                $photo_names[] = $imageName;
            }
        }

        $data['long_content_ar'] = editorContent($request->long_content_ar);

        $data['long_content_en'] = editorContent($request->long_content_en);

        $data['photo'] = $photo_names;

        Model::where('id', $request->id)->update($data);

        
        Model::where('id', $request->id)->update($data);
        return redirect('/admin/problems')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/problems')->with('success', 'deleted Successfully!');
    }
}
