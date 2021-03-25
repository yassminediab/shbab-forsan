<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Volunteer as Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VolunteerController extends Controller
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
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->name .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/volunteers/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.volunteers.index', [
            'modelName' => 'volunteers',
            'pageTitle' => 'volunteers'
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.volunteers.create');
    }

    public function store(Request $request)
    {
        Model::create($request->all());
        
        return redirect('/admin/volunteers')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $volunteer = Model::find($id);

        return view('admin.volunteers.edit', [
            'volunteer' => $volunteer
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/volunteers')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/volunteers')->with('success', 'deleted Successfully!');
    }
}
