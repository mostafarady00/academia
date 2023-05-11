<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get All DB
        $news = DB::table('news')->get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'image' => 'required|image',
            'day' =>'required',
            'month' =>'required',
            'year' =>'required|max:20',
            'title' => 'required|max:50',
            'description' => 'max:400'
        ]);

        // Upload Image
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('/uploads/news'), $imageName);

        DB::table('news')->insert([
            'image' => $imageName,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
            'title' => $request->title,
            'description' => $request->description
        ]);

        // return With Message
        return redirect()->back()->with('success', "Your Record has been Uploaded successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $new = DB::table('news')->find($id);
        // return view('admin.news.show', compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $new = DB::table('news')->find($id);
        return view('admin.news.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'month' =>'required',
            'year' =>'required|max:20',
            'title' => 'required|max:50',
            'title' => 'required|max:50',
            'description' => 'max:400'
        ]);

        // Upload Image
        if($request->file('image')) {
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('/uploads/news'), $imageName);
            DB::table('news')->insert([
                'image' => $imageName,
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year,
                'title' => $request->title,
                'description' => $request->description
            ]);
        } else {
            DB::table('news')->where('id', $id)->update([
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year,
                'title' => $request->title,
                'description' => $request->description
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
        DB::table('news')->delete($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
