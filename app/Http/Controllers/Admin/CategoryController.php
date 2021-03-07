<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category as Model;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
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
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/categories/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/categories/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.categories.index', [
            'modelName' => 'categories',
            'pageTitle' => 'Categories'
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Model::create($request->all());
        
        return redirect('/admin/categories')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $category = Model::find($id);

        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/categories')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/categories')->with('success', 'deleted Successfully!');
    }
}
