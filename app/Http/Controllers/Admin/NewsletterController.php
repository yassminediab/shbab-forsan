<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsLetter as Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class NewsletterController extends Controller
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
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->name .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/newsletter/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.newsletter.index', [
            'modelName' => 'newsletter',
            'pageTitle' => 'newsletter'
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

    public function delete($id)
    {
        Model::find($id)->delete();
        return redirect('/admin/newsletter')->with('success', 'deleted Successfully!');
    }
}
