<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Event::latest()->select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '
                           <ul class="list-inline">
                                <li><a class="btn btn-primary btn-icon" href="' . url('admin/events/edit/' . $row->id) . '"><i class="icon-pencil7"></i></a></li>
                                <li><a onclick = "if (!confirm(\'Are You sure to remove '. $row->title_en .'?\')) { return false; }" class="btn btn-danger btn-icon" href="' . url('admin/events/delete/' . $row->id) . '"><i class="icon-trash"></i></a></li>
                            </ul>';

                            return $btn;
                    })
                    ->addColumn('date', function($row){;
                        return $row->date->format('Y-m-d');
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.events.index', [
            'modelName' => 'events',
            'pageTitle' => 'Events'
        ]);
    }
    public function show($id)
    {
        return Event::find($id)->description;
    }
    public function create()
    {
        return view('admin.events.create');
    }

    public function store(EventRequest $request)
    {
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);
        $request['image'] = $imageName;

        $request->content_ar = editorContent($request->content_ar);

        $request->content_en = editorContent($request->content_en);

        Event::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
            'date' => $request->date,
            'time_to' => $request->time_to.':00',
            'time_from' => $request->time_from.':00',
            'image' => $imageName,
            'location_ar' => $request->location_ar,
            'location_en' => $request->location_en,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'price' => $request->price,
            'contact' => $request->contact,
            'organizer' => $request->organizer
        ]);

        return redirect('/admin/events')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.events.edit', [
            'event' => $event,
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data = $request->except('_token','file', 'files');
        if ($request->file) {
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $data['content_ar'] = editorContent($request->content_ar);

        $data['content_en'] = editorContent($request->content_en);


        Event::where('id', $request->id)->update($data);
        return redirect('/admin/events')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Event::find($id)->delete();
        return redirect('/admin/events')->with('success', 'deleted Successfully!');
    }
}
