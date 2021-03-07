<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contact as Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
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
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/contact/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.contact.index', [
            'modelName' => 'contact',
            'pageTitle' => 'contact'
        ]);
    }

    public function show($id)
    {
        return Model::find($id)->description;
    }

    public function create(Request $request)
    {
        Model::create($request->all());

        return redirect('/admin/contact')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $contact = Model::find($id);

        return view('admin.contact.edit', [
            'contact' => $contact
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        Model::where('id', $request->id)->update($data);

        return redirect('/admin/contact')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/contact')->with('success', 'deleted Successfully!');
    }
}
