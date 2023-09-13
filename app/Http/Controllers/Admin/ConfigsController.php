<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ConfigStatus;
use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigsController extends Controller
{
    public function index()
    {
        $config = Configs::orderBy('id','DESC')->first();
        return view('admin.configs.index',compact('config'));
    }

    public function create(Request $request)
    {

        try {
            $config = Configs::orderBy('id','DESC')->first();
            $logo = $request->file('logo');
            $email = $request->input('email');
            $cskh = $request->input('cskh');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $zalo = $request->input('zalo');
            $facebook = $request->input('facebook');
            $status = $request->input('status');

            if ($request->has('logo')) {
                $imageName = time() . '.' . $logo->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $logo->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }
            if (!$config){
                $configs = [
                    'logo' => $imageURL,
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
            } else{
                $config->logo = $imageURL;
                $config->email = $email;
                $config->phone = $phone;
                $config->zalo = $zalo;
                $config->facebook = $facebook;
                $config->address = $address;
                $config->cskh = $cskh;
                $config->status = $status;

                $success = $config->save();
            }

            if ($success) {
                alert()->success('Success', 'Create configs success!');
                return redirect(route('admin.configs.index'));
            }
            alert()->error('Error', 'Create configs error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }
}
