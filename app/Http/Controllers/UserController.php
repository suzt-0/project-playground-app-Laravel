<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // not needed

        // $users = User::all();
        // return view('');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed',
        ]);
        $user = User::create($data);

        if ($user) {
            return redirect()->route('login')->with('success', 'User data added successfully!');
        }
        //$request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|string',
        //     'password' => 'required|string|confirmed',  
        // ]);
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
        // return redirect()->route('login')->with('success', 'User data added successfully!');
    }




    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $myProject = $user->myProject()->count();
        $completedProject = $user->myProject()->whereStatus('Completed')->count();
        $failedProject = $user->myProject()->whereStatus('Dropped')->count();
        $joinedProject = $user->joinedProject()->count();
        return view('user-profile', compact('user','myProject','completedProject','failedProject','joinedProject'));
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

    // Defining logic for Login Function

    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    //Authentication of login info

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember_me)) {
            notify()->success('Logged in Sucessfully!!', 'Welcome');
            return redirect()->route('dashboard');
        }
        notify()->error('Enter valid credentials', 'Login Failed');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    // public function dashboardPage(){
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
    //     else{
    //         return redirect()->route('login');
    //     }
    // }
}