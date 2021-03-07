<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\CaseSection as Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CaseSectionController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/case/section/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.caseSection.index', [
            'pageTitle' => 'case/section',
            'modelName' => 'case/section',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.caseSection.create');
    }

    public function store(Request $request)
    {
        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
        ]);
        return redirect('/admin/case/section')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $caseSection = Model::find($id);

        return view('admin.caseSection.edit', [
            'caseSection' => $caseSection
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token');
        
        Model::where('id', $request->id)->update($data);

        return redirect('/admin/case/section')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        
        return redirect('/admin/case/section')->with('success', 'deleted Successfully!');
    }
}
