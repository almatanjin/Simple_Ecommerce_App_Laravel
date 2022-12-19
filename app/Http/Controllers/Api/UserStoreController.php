<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $validatedData = $request->validate(
        //     [
        //         'category_name' => 'required|unique:categories|max:255'
        //     ],
        //     [

        //     'category_name.required' => "Please Input Category Name",
            
        //     ]

        // );

        // Category::insert([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id,
        //     'created_at' => Carbon::now(),

        // ]);



        $validate = $request->validate(
            [
                'name' => 'required'
            ]
        );
        $user = new User();

        
      
        $user->save();

        return Redirect()->back()->with('success','Category Added Successfully');
    }
}
