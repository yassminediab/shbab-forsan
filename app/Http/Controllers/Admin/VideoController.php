<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video as Model;
use Yajra\DataTables\Facades\DataTables;

class VideoController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/video/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/video/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.video.index', [
            'pageTitle' => 'video',
            'modelName' => 'video',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'url' => Model::urlFormat($request->url)
        ]);
        return redirect('/admin/video')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $video = Model::find($id);

        return view('admin.video.edit', [
            'video' => $video
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/video')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/video')->with('success', 'deleted Successfully!');
    }
}
