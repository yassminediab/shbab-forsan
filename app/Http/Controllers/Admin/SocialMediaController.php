<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SocialMedia;
use Yajra\DataTables\Facades\DataTables;

class SocialMediaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = SocialMedia::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '
                           <ul class="list-inline">
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/social-media/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                            </ul>';
    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.socialMedia.index', [
            'modelName' => 'socialMedia',
            'pageTitle' => 'Social Media'
        ]);
    }
   
    public function edit($id)
    {
        $socialMedia = SocialMedia::find($id);
          
        return view('admin.socialMedia.edit', [
            'socialMedia' => $socialMedia,
        ]);
    }

    public function update(Request $request)
    {
        SocialMedia::where('id', $request->id)->update($request->except('_token'));
        return redirect('/admin/social-media')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        SocialMedia::find($id)->delete();
        return redirect('/admin/social-media')->with('success', 'deleted Successfully!');
    }
}
