<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigsController extends Controller
{
    public function index()
    {
        return view('admin.logo.index');
    }

    public function create(Request $request)
    {
        try {
            $thumbnail = $request->file('thumbnail');
            $email = $request->input('email');
            $cskh = $request->input('cskh');
            $phone = $request->input('phone_number');
            $address = $request->input('address');
            $zalo = $request->input('zalo');
            $facebook = $request->input('facebook');
            $status = $request->input('status');

            if ($request->has('thumbnail')) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }

            $configs = [
                'thumbnail' => $imageURL,
                'email' => $email,
                'phone' => $phone,
                'zalo' => $zalo,
                'facebook' => $facebook,
                'address' => $address,
                'cskh' => $cskh,
                'status' => $status,
//                'user_id' => Auth::user()->id,
            ];

            $success = Configs::create($configs);
            if ($success) {
                alert()->success('Success', 'Create logo success!');
                return redirect(route('admin.logo.index'));
            }
            alert()->error('Error', 'Create logo error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }
}
