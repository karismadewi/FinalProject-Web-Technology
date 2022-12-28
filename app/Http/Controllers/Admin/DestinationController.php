<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use WithPagination;
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        //dd($keyword);
        $destinations = Destination::with('tour_guide')
            ->where('dest_name', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('tour_guide', function ($query) use ($keyword) {
                $query->where('tg_name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(2);
        // dd($destinations);
        return view('admin.destination.destination')->with('destinations', $destinations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tour_guides = TourGuide::all();
        // dd($destinations);
        return view('admin.destination.create_destination')->with('tour_guides', $tour_guides);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Session::flash('dest_name', $request->dest_name);
        Session::flash('dest_description', $request->dest_description);
        Session::flash('tguide_id', $request->tguide_id);
        $message = [
            'dest_name.required' => 'The destination name must be filled!',
            'dest_description.required' => 'The description must be filled!',
            'tguide_id.required' => 'The tour guide must be selected!',
            'dest_image.required' => 'The image must be filled!',
            'dest_image.mimes' => 'The image must be in extension jpg, jpeg, png!',
            'dest_image.image' => 'The file must be an image!',
        ];
        $request->validate([
            'dest_name' => 'required|max:255',
            'dest_description' => 'required|max:255',
            'tguide_id' => 'required',
            'dest_image' => 'required|image|mimes:jpeg,png,jpg'
        ], $message);

        $image_file = $request->file('dest_image');
        $img_ext = $image_file->extension();
        $img_name = date('ymdhis') . "." . $img_ext;
        $image_file->move(public_path('images/destinations'), $img_name);

        $data = [
            'dest_name' => $request->input('dest_name'),
            'dest_description' => $request->input('dest_description'),
            'dest_image' => $img_name,
            'tguide_id' => $request->tguide_id
        ];
        //dd($data);
        Destination::create($data);
        return redirect('admin/destinations')->with('success', 'Data successfully added!');
        // TourGuide::create($validated);
        // $path = $request->file('tg_image')->store('tg_images');
        // TourGuide::create($request->except('_token'));
        // return redirect('tour_guide')->with('success', 'Data success added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Destination::with('tour_guide')->where('id', $id)->first();
        $tour_guides = TourGuide::all();
        // dd($data);
        return view('admin.destination.edit_destination', [
            'data' => $data,
            'tour_guides' => $tour_guides
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        // Session::flash('dest_name', $request->dest_name);
        // Session::flash('dest_description', $request->dest_description);
        // Session::flash('tguide_id', $request->tguide_id);
        $message = [
            'dest_name.required' => 'The destination name must be filled!',
            'dest_description.required' => 'The description must be filled!',
            'tguide_id.required' => 'The tour guide must be selected!',
            'dest_image.mimes' => 'The image must be in extension jpg, jpeg, png!',
            'dest_image.image' => 'The file must be an image!',
        ];
        $request->validate([
            'dest_name' => 'required|max:255',
            'dest_description' => 'required|max:255',
            'tguide_id' => 'required',
            'dest_image' => 'image|mimes:jpeg,png,jpg'
        ], $message);

        $data = [
            'dest_name' => $request->input('dest_name'),
            'dest_description' => $request->input('dest_description'),
            'tguide_id' => $request->tguide_id
        ];
        if ($request->hasFile('dest_image')) {
            $request->validate([
                'dest_image' => 'mimes:jpeg,png,jpg'
            ], [
                'dest_image.mimes' => 'The image must be in extension jpg, jpeg, png!'
            ]);
            $image_file = $request->file('dest_image');
            $img_ext = $image_file->extension();
            $img_name = date('ymdhis') . "." . $img_ext;
            $image_file->move(public_path('images/destinations'), $img_name);

            $data_img = Destination::where('id', $id)->first();
            File::delete(public_path('images') . '/destinations/' . $data_img->dest_image);

            $data['dest_image'] = $img_name;
        }
        //dd($data);
        Destination::where('id', $id)->update($data);
        return redirect('admin/destinations')->with('success', 'Data successfully added!');
        // TourGuide::create($validated);
        // $path = $request->file('tg_image')->store('tg_images');
        // TourGuide::create($request->except('_token'));
        // return redirect('tour_guide')->with('success', 'Data success added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Destination::where('id', $id)->first();
        File::delete(public_path('images' . '/destinations/' . $data->dest_image));
        Destination::where('id', $id)->delete();
        // dd($data);
        return redirect('admin/destinations')->with('success', 'Data successfully deleted!');
    }
}
