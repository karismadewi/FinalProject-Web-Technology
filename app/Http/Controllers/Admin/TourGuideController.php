<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class TourGuideController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $data = TourGuide::where('tg_name', 'LIKE', '%'.$keyword.'%')
                ->paginate(2);
        return view('admin.tour_guide.tour_guide')->with('data', $data);
    }
    public function create()
    {
        return view('admin.tour_guide.create_tour_guide');
    }
    public function store(Request $request)
    {
        Session::flash('tg_name', $request->tg_name);
        Session::flash('tg_nickname', $request->tg_nickname);
        Session::flash('tg_about', $request->tg_about);
        Session::flash('tg_destination', $request->tg_destination);
        Session::flash('tg_price', $request->tg_price);
        // Session::flash('tg_image', $request->tg_image);
        $message = [
            'tg_name.required' => 'The name must be filled!',
            'tg_nickname.required' => 'The nickname must be filled!',
            'tg_about.required' => 'The about must be filled!',
            'tg_destination.required' => 'The destination must be filled!',
            'tg_price.required' => 'The price must be filled!',
            'tg_image.required' => 'The image must be filled!',
            'tg_name.unique' => 'The name has already taken!',
            'tg_nickname.unique' => 'The nickname has already taken!',
            'tg_price.numeric' => 'The price must be filled in numbers!',
            'tg_image.mimes' => 'The image must be in extension jpg, jpeg, png!',
            'tg_image.image' => 'The file must be an image!',
        ];
        $request->validate([
            'tg_name' => 'required|unique:tour_guides|max:255',
            'tg_nickname' => 'required|unique:tour_guides|max:255',
            'tg_about' => 'required',
            'tg_destination' => 'required',
            'tg_price' => 'required|numeric',
            'tg_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], $message);

        $image_file = $request->file('tg_image');
        $img_ext = $image_file->extension();
        $img_name = date('ymdhis') . "." . $img_ext;
        $image_file->move(public_path('images/tour_guides'), $img_name);

        $data = [
            'tg_name' => $request->input('tg_name'),
            'tg_nickname' => $request->input('tg_nickname'),
            'tg_about' => $request->input('tg_about'),
            'tg_destination' => $request->input('tg_destination'),
            'tg_price' => $request->input('tg_price'),
            'tg_image' => $img_name,
        ];
        TourGuide::create($data);
        return redirect('admin/tour_guide')->with('success', 'Data successfully added!');
        // TourGuide::create($validated);
        // $path = $request->file('tg_image')->store('tg_images');
        // TourGuide::create($request->except('_token'));
        // return redirect('tour_guide')->with('success', 'Data success added');
    }
    public function edit($id)
    {
        $data = TourGuide::where('id', $id)->first();
        // dd($data);
        return view('admin.tour_guide.edit_tour_guide')->with('data', $data);
    }
    public function update(Request $request, $id)
    {
        $message = [
            'tg_name.required' => 'The name must be filled!',
            'tg_nickname.required' => 'The nickname must be filled!',
            'tg_about.required' => 'The about must be filled!',
            'tg_destination.required' => 'The destination must be filled!',
            'tg_price.required' => 'The price must be filled!',
            'tg_image.required' => 'The image must be filled!',
            'tg_name.unique' => 'The name has already taken!',
            'tg_nickname.unique' => 'The nickname has already taken!',
            'tg_price.numeric' => 'The price must be filled in numbers!',
            'tg_image.mimes' => 'The image must be in extension jpg, jpeg, png!',
            'tg_image.image' => 'The file must be an image!',
        ];
        $request->validate([
            'tg_name' => 'required|unique:tour_guides|max:255',
            'tg_nickname' => 'required|unique:tour_guides|max:255',
            'tg_about' => 'required',
            'tg_destination' => 'required',
            'tg_price' => 'required|numeric',
            'tg_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], $message);
        $data = [
            'tg_name' => $request->input('tg_name'),
            'tg_nickname' => $request->input('tg_nickname'),
            'tg_about' => $request->input('tg_about'),
            'tg_destination' => $request->input('tg_destination'),
            'tg_price' => $request->input('tg_price'),
        ];
        if ($request->hasFile('tg_image')) {
            $request->validate([
                'tg_image' => 'mimes:jpeg,png,jpg'
            ], [
                'tg_image.mimes' => 'The image must be in extension jpg, jpeg, png!'
            ]);
            // upload img to dir public/images
            $image_file = $request->file('tg_image');
            $img_ext = $image_file->extension();
            $img_name = date('ymdhis') . "." . $img_ext;
            $image_file->move(public_path('images'), $img_name);

            // delete the old photo
            $data_img = TourGuide::where('id', $id)->first();
            File::delete(public_path('images') . '/' . $data_img->tg_image);

            $data['tg_image'] = $img_name;
        }
        // dd($data);
        TourGuide::where('id', $id)->update($data);
        return redirect('admin/tour_guide')->with('success', 'Data successfully updated!');
    }
    public function destroy($id)
    {
        $data = TourGuide::where('id', $id)->first();
        File::delete(public_path('images' . '/' . $data->tg_image));
        TourGuide::where('id', $id)->delete();
        // dd($data);
        return redirect('admin/tour_guide')->with('success', 'Data successfully deleted!');
    }
}
