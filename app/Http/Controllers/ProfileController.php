<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'gender'=>'required'
        ]);
        User::where('id',auth()->user()->id)
            ->update([
                'name'=>$request->name,
                'gender'=>$request->gender,
                'phone_number'=>$request->phone_number,
                'address'=>$request->address,
                'description'=>$request->description

            ]);
        return redirect()->back()->with('message','profile updated');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

    }

    public function profilePic(Request $request)
    {
        $this->validate($request,['file'=>'required|image|mimes:jpeg,jpg,png']);
        if($request->hasFile('file')){
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('/profile');
            $image->move($destination,$name);

            $user = User::where('id',auth()->user()->id)->update(['image'=>$name]);

            return redirect()->back()->with('message','profile updated');


        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
