<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\AreaSection as Model;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class AreSectionController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/area/section/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/area/section/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.areaSection.index', [
            'pageTitle' => 'area/section',
            'modelName' => 'area/section',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.areaSection.create');
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
            'icon' => $request->icon

        ]);
        return redirect('/admin/area/section')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $areaSection = Model::find($id);

        return view('admin.areaSection.edit', [
            'areaSection' => $areaSection
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token');

        $data['content_ar'] = editorContent($request->content_ar);

        $data['content_en'] = editorContent($request->content_en);

        
        Model::where('id', $request->id)->update($data);

        return redirect('/admin/area/section')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/area/section')->with('success', 'deleted Successfully!');
    }
}
