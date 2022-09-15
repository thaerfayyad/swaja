<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\ChechOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    //
    public function showLogin()
     {
        return response()->view('dashboard.auth.login');
    }
    public function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:1|max:20',

        ]);

        if (!$validator->fails()) {
            $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];
            if (Auth::guard('web')->attempt($credentials )) {
                return response()->json([
                    'message' => 'Logged in successfully'
                ], Response::HTTP_OK);
            } else {
                return response()->json([
                    'message' => "يوجد خطئ في البيانات يرجا محاولة مرة اخرى"
                ], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first(),
            ], Response::HTTP_BAD_REQUEST);
        }

    }
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!$validator->fails()) {


            $isSaved = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'type' => 'user',
                'password' =>  bcrypt($request->password),
            ]);
            auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")]);
            return response()->json([
                'message' => $isSaved ? 'Created successfully' : 'Create Failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' =>   $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }

    }

    public function changePassword(Request $request)
    {
        return response()->view('dashboard.product.create');

    }
    public function update(Request $request ,$id)
    {
        $this->validate($request, [

            'old_password' =>  ['required', new ChechOldPassword],
            'password' =>'required|confirmed|min:6',
            ]);

        $request->merge(['password' =>bcrypt($request->password)]);
        auth()->user()->update($request->all());

        session()->flash('success', 'تم تغير كلمة المرور');
        return redirect()->route('dashboard.home');

    }


    public function logout(Request $request)
    {
        auth('web')->logout();
        // Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('auth.login-show');

    }
}
