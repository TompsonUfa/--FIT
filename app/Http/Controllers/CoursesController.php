<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class CoursesController extends Controller
{
    public function show(Request $request)
    {
        $total = Course::count();
        $search = $request->get('search');
        if (empty($search)) {
            $courses = Course::paginate(10);
        } else {
            $courses = Course::where('title', 'LIKE', '%' . $search . '%')->paginate(10);
            $courses->appends(request()->input())->links();
        }
        return view('admin.courses.index', ['courses' => $courses, 'total' => $total]);
    }
    public function showAddCourse(Request $request)
    {
        return view('admin.courses.add.index');
    }
    public function delete(Request $request)
    {
        $courseId = $request->get('id');
        $Course = Course::find($courseId);
        $Course->delete();
    }
    public function addCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,webp,svg|max:2048|',
            'text' => 'required|min:15'
        ]);
        $title = $request->get('title');
        $image = $request->file('image');
        $text = $request->get('text');
        $course = Course::insertGetId([
            'title' => $title,
            'text' => $text,
            'img' =>  Str::slug($title),
        ]);
        $image->store('images/courses/' . $course . "/", 'public');
        $classifiedImg = $request->file('image');
        $loadImg = Image::make($classifiedImg)->encode('webp', 75)->save(storage_path() . '/app/public/images/courses/' . $course . "/" .  Str::slug($title) . '.webp');
        if ($course && $loadImg) {
            return response()->json(['url' => route('courses')]);
        }
    }
}
