<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          // Get All
          //  $courses = Course::all();
         $courses = DB::table('courses')->get();
         return view('admin.courses.index', compact('courses'));
    //$courses = DB::table('courses')
    //->join('instructors', 'courses.instructor_id', '=', 'instructors.id')
    //->select('courses.id', 'courses.course_name', 'instructors.instructor_name')->get();

        // return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validate here...
        $this->validate($request, [
        'title' => 'required',
        //'instreuct_nam' => 'required',
        'img_course' => 'required',
        //'instruct_img' => 'required',
        'price' => 'required',
        'description' => 'required'
        //'instruct_subject' => 'required'
    ]);
    //     // ....
    // ], [
    //     'title' => 'يرجى ادخال الاسم'



        // Upload Image courses
        $imageName = time() . '.' . $request->file('img_course')->extension();
        $request->file('img_course')->move(public_path('/uploads/courses'), $imageName);
       //$request->file('instruct_img')->move(public_path('/uploads/instructor'), $imageName);

        DB::table('courses')->insert([
            'img_course' => $imageName,
            'price' => $request->price,
            'title' => $request->title,
            'description' => $request->description
        //   'instruct_img' => $request->imageName,
        //    'instreuct_nam' => $request->instreuct_nam,
           //'instruct_subject' => $request->instruct_subject
        ]);

        // return With Message
        return redirect()->back()->with('success', "Your Record has been Uploaded successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $course = DB::table('courses')->find($id);
         return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'img_course' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

          // Upload Image
        if($request->file('img_course')) {
            $imageName = time() . '.' . $request->file('img_course')->extension();
            $request->file('img_course')->move(public_path('/uploads/courses'), $imageName);
            //DB::table('courses')->insert([
                DB::table('courses')->where('id', $id)->update([
                'img_course' => $imageName,
                'price' => $request->price,
                'title' => $request->title,
                'description' => $request->description
            ]);
        } else {
            DB::table('courses')->where('id', $id)->update([
                'price' => $request->price,
                'title' => $request->title,
                'description' => $request->description
            ]);
            }
            // return with message
            return redirect()->back()->with('success', "Your Record has been Uploaded successfully");
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('courses')->delete($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
