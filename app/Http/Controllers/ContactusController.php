<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $contactus =DB::table('contactuses')->get();
         return view('admin.contactus.index', compact('contactus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contactus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    // $validator = Validated::make($request->all(), [
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|string|email|max:255',
    //     'message' => 'required|string',
    //     'subject' => 'required|string'
    // ]);


    // if ($validator->passes()) {
    //     // عشان تخزن الرسايل
    //     DB::table('contactuses')->insert([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'message' => $request->input('message'),
    //         // 'created_at' => Carbon::now(),
    //         // 'updated_at' => Carbon::now(),
    //     ]);

    //     // هيظهرله انها وصلت
    //     return redirect()->route('contact')->with('success', 'تم إرسال رسالتك بنجاح.');
    // } else {
    //     // لو الخانات فاضيه
    //     return redirect()->route('contact')->withErrors($validator)->withInput();
    // }
        }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contactus $contactus)
    {
        //
    }
}
