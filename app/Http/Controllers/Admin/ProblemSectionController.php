<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProblemSection as Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProblemSectionController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/problem/section/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.problemSection.index', [
            'pageTitle' => 'problem/section',
            'modelName' => 'problem/section',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.problemSection.create');
    }

    public function store(Request $request)
    {
        Model::create($request->all());
        
        return redirect('/admin/problem/section')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $problemSection = Model::find($id);

        return view('admin.problemSection.edit', [
            'problemSection' => $problemSection
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/problem/section')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/problem/section')->with('success', 'deleted Successfully!');
    }
}
