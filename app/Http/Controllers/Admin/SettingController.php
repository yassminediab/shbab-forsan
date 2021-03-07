<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppoinmentRequest;
use App\Http\Requests\SettingsRequest;
use Illuminate\Http\Request;
use App\Setting as Model;
use DB;

class SettingController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/setting/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/setting/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.setting.index', [
            'pageTitle' => 'setting',
            'modelName' => 'setting',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function store(Request $request)
    {
        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'button_title_en' => $request->button_title_en,
            'button_title_ar' => $request->button_title_ar,
            'button_url' => $request->button_url,
            'image' => $imageName,
        ]);
        return redirect('/admin/slider')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $setting = Model::find($id);

        return view('admin.setting.edit', [
            'setting' => $setting
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

        return redirect('/admin/setting')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        
        return redirect('/admin/setting')->with('success', 'deleted Successfully!');
    }
}
