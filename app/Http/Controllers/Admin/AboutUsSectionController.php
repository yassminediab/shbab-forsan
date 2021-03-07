<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\AboutUsSection as Model;

class AboutUsSectionController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/aboutSection/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.aboutSection.index', [
            'modelName' => 'About',
            'pageTitle' => 'About'
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.aboutSection.create');
    }

    public function store(Request $request)
    {
        Model::create($request->all());
        
        return redirect('/admin/aboutSection')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $about = Model::find($id);

        return view('admin.aboutSection.edit', [
            'about' => $about
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/aboutSection')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/aboutSection')->with('success', 'deleted Successfully!');
    }
}
