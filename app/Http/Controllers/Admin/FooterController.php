<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer as Model;
use Yajra\DataTables\Facades\DataTables;

class FooterController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/footer/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.footer.index', [
            'pageTitle' => 'settings',
            'modelName' => 'footer',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.footer.create');
    }

    public function store(Request $request)
    {
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);

        $request['logo'] = $imageName;

        $request->content_ar = editorContent($request->content_ar);

        $request->content_en = editorContent($request->content_en);
        Model::create($request->all());
        
        return redirect('/admin/footer')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $footer = Model::find($id);
        return view('admin.footer.edit', [
            'footer' => $footer
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token', 'file', 'files','file2');
        if ($request->file) {
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('images'), $imageName);
            $data['logo'] = $imageName;
        }

        if ($request->file2) {
            $imageName = time().'.'.request()->file2->getClientOriginalExtension();
            request()->file2->move(public_path('images'), $imageName);
            $data['logo_footer'] = $imageName;
        }

        $data['content_ar'] = editorContent($request->content_ar);

        $data['content_en'] = editorContent($request->content_en);

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/footer')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/footer')->with('success', 'deleted Successfully!');
    }
}
