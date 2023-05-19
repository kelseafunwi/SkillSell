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

        // validation that has to occur
        $this->validate($request, [
            'fullname' => "required",
            'email' => 'required|email',
            'phone' => 'numeric|nullable',
            // 'photo' => 'file',
        ]);

        $userExist = User::where('email', $request->email)->get();
        if (!isEmpty($userExist)) {
            return redirect('/login')->withErrors(["This email already exist."])->withInput();
        }

        if ($request->password != $request->passwordconfirm) {
            return redirect('/register')->withErrors(["The passwords do not match"])->withInput();
        }

        $phone = new PhoneNumber;
        $phone->number = $request->phone;

        $phone->save();

        $user = new User;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->occupation = $request->occupation;
        $user->password = Hash::make($request->password);
        $user->date_of_birth = $request->date_of_birth;
        $user->location = $request->input('location', "No location");

        // the issue here is that it is not able to detect when i have entered a file into the field
        // and keeps giving the error that the thing i inserted is not a file when it wass a file.
        $newIndex = User::get()->max('id');
        if ($request->hasFile('photo')) {
            // things to do if the user input a photo
            // $fileExtension = $request->file('photo')->guessExtension();
            $path = $request->file('photo')->storeAs('/public/img', 'user_'.$newIndex);
            $accessPath = '/img/user_'.$newIndex;
            $user->profile = $accessPath;
        } else {
            dd("that was not a file");
        }
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
