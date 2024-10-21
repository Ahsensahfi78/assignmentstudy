<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        return view('user.user');
    }
    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usersData = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'type' => $request->role_id,
            'email' => $request->email,
        ];
        User::create($usersData);
        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // $id = auth()->guard('admin_user')->user()->id;

        // Get events based on the user's adminReNo
        // $events = Event::where('adminReNo', $id)->get();
        $users = User::all();
        $output = '';
        if ($users->count() > 0) {
            $output .= ' <div class="table-responsive"> <table class="table  table-striped table-sm text-center align-middle">

             <thead >
               <tr>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>';
            foreach ($users as $user) {
                $output .= '<tr>
                 <td>' . $user->name . '</td>
                 <td>' . $user->email . '</td>
                 <td>' . $user->type . '</td>

                 <td>
                   <a href="#" id="' . $user->id . '" class="btn btn-primary mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#edituserModal"><i class="bi-pencil-square h6"></i></a>

                   <a href="#" id="' . $user->id . '" class="btn btn-danger mx-1 deleteIcon"><i class="bi-trash h6"></i></a>
                 </td>
               </tr>';
            }
            $output .= '</tbody></table></div>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $users = User::find($id);
        return response()->json($users);
    }

    /**
     * Update the specified resource in storage.
     */
    // handle update an employee ajax request
    public function update(Request $request)
    {

        $users = User::find($request->user_id);

        $usersData = [
            'name' => $request->name,
            'type' => $request->role_id,
            'email' => $request->email,
        ];

        $users->update($usersData);
        return response()->json([
            'status' => 200,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        User::find($id);
        User::destroy($id);
    }
}
