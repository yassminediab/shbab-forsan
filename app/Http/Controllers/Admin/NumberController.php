<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Number as Model;
use Yajra\DataTables\Facades\DataTables;

class NumberController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Model::latest()->select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '
                           <ul class="list-inline">
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/number/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/number/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.number.index', [
            'pageTitle' => 'number',
            'modelName' => 'number',
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.number.create');
    }

    public function store(Request $request)
    {
        Model::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'number' => $request->number,
            'icon' => $request->icon,
        ]);
        return redirect('/admin/number')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $number = Model::find($id);

        return view('admin.number.edit', [
            'number' => $number
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/number')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/number')->with('success', 'deleted Successfully!');
    }
}
