<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use PHPUnit\Framework\Constraint\IsEmpty;
use Termwind\Components\Dd;

use function PHPUnit\Framework\isEmpty;

use App\Models\PhoneNumber;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('pages.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $userExist = User::where('email', $request->email)->get();
        if (!isEmpty($userExist)) {
            return redirect('/register')->with(['message' => "User already exists"]);
        }

        if ($request->password != $request->passwordconfirm) {
            return redirect('/register')->with(['message' => "Passwords do not match"])->withInput();
        }

        $phone = new PhoneNumber;
        $phone->number = $request->phone;

        $phone->save();

        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->occupation = $request->occupation;
        $user->password = Hash::make($request->password);
        $user->date_of_birth = $request->date_of_birth;
        $user->location = $request->location;
        $user->phone_id = $phone->id;

        $user->save();

        event(new Registered($user));

        if (Auth::login($user)) {
            return redirect('/')->with('message', "the login was successful!");
        } else {
            return redirect('/')->with('message' , "the log was a fatal error!");
        }
    }
}
