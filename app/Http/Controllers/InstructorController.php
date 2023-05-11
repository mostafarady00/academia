<?php

namespace App\Http\Controllers;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
              //  $courses = Course::all();
        $instructors = DB::table('instructors')->get();
        return view('admin.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Validate here...
        $this->validate($request, [
        'instreuct_nam' => 'required',
        'instruct_img' => 'required',
        'instruct_subject' => 'required'

    ]);
  // Upload Image courses
  $imageName = time() . '.' . $request->file('instruct_img')->extension();
  $request->file('instruct_img')->move(public_path('/uploads/instructor'), $imageName);

    DB::table('instructors')->insert([
        'instruct_img' =>$imageName,
        'instreuct_nam' => $request->instreuct_nam,
        'instruct_subject' => $request->instruct_subject
]);

// return With Message
return redirect()->back()->with('success', "Your Record has been Uploaded successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $instructor= DB::table('instructors')->find($id);
        return view('admin.instructors.edit',compact('instructor'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
                  // Validate here...
                $this->validate($request, [
                'instreuct_nam' => 'required',
                'instruct_img' => 'required',
                'instruct_subject' => 'required'

                ]);
                if($request->file('instruct_img')){
   // Upload Image course
    $imageName = time() . '.' . $request->file('instruct_img')->extension();
    $request->file('instruct_img')->move(public_path('/uploads/instructor'), $imageName);
    //DB::table('instructors')->insert([
        DB::table('instructors')->where('id',$id)->update([
        'instruct_img' =>$imageName,
        'instreuct_nam' => $request->instreuct_nam,
    'instruct_subject' => $request->instruct_subject
            ]);
        }else{
            DB::table('instructors')->where('id',$id)->update([
                //'instruct_img' =>$imageName,
                'instreuct_nam' => $request->instreuct_nam,
                'instruct_subject' => $request->instruct_subject
        ]);
        }
            // return With Message
            return redirect()->back()->with('success', "Your Record has been Uploaded successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('instructors')->delete($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
