<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use App\Models\employment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EmploymentController extends Controller
{
    public function show(Request $request)
    {
        $total = employment::count();
        $employment = $request->get('search');
        if (empty($search)) {
            $employment = employment::paginate(10);
        } else {
            $employment = employment::where('name', 'LIKE', '%' . $search . '%')->paginate(10);
            $employment->appends(request()->input())->links();
        }
        return view('admin.employment.index', ['employment' => $employment, 'total' => $total]);
    }
    public function delete(Request $request)
    {
        $employmentId = $request->get('id');
        $employment = employment::find($employmentId);
        $employment->delete();
    }
    public function showAddEmployment(Request $request)
    {
        return view('admin.employment.add.index');
    }
    public function addEmployment(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'file' => 'required|mimes:jpg,png,jpeg,gif,webp,svg,mp4,avi',
            'text' => 'required|min:15'
        ]);
        $title = $request->get('title');
        $file = $request->file('file');
        dd($file);
        $media = "";
        $employment = Employment::insertGetId([
            'title' => $title,
            $media =>  Str::slug($title),
        ]);
        // Storage::makeDirectory('/public/media/employment/' . $employment);
        // $loadImg = Image::make($image)->encode('webp', 75);
        // $loadImg->save(Storage::path('/public/media/employment/' . $employment . "/" .  Str::slug($title) . '.webp'));
        // if ($employment && $loadImg) {
        //     return response()->json(['url' => route('courses')]);
        // }
    }
}
