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
            $name_company = $request->input('name_company');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $zalo = $request->input('zalo');
            $facebook = $request->input('facebook');
            $location = $request->input('location');
            $status = $request->input('status');
            $short_introduction_vi = $request->input('short_introduction_vi');
            $short_introduction_en = $request->input('short_introduction_en');
            $introduce_vi = $request->input('introduce_vi');
            $introduce_en = $request->input('introduce_en');
            $avatar = $request->file('avatar');

            if ($request->has('logo')) {
                $imageName = 'logo' . time() . '.' . $logo->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $logo->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                if ($config){
                    $imageURL = $config->logo;
                } else{
                    $imageURL = null;
                }
            }

            if ($request->has('avatar')) {
                $imagePath = $avatar->store('avatar', 'public');
                $avatarURL = asset('storage/' . $imagePath);
            } else {
                if ($config){
                    $avatarURL = $config->avatar;
                } else{
                    $avatarURL = null;
                }
            }
            if (!$config){
                $configs = [
                    'logo' => $imageURL,
                    'email' => $email,
                    'phone' => $phone,
                    'zalo' => $zalo,
                    'facebook' => $facebook,
                    'location' => $location,
                    'address' => $address,
                    'cskh' => $cskh,
                    'name_company' => $name_company,
                    'status' => $status,
                    'short_introduction_vi' => $short_introduction_vi,
                    'short_introduction_en' => $short_introduction_en,
                    'introduce_vi' => $introduce_vi,
                    'introduce_en' => $introduce_en,
                    'avatar' => $avatarURL,
//                'user_id' => Auth::user()->id,
                ];

                $success = Configs::create($configs);
            } else{
                $config->logo = $imageURL;
                $config->email = $email;
                $config->phone = $phone;
                $config->zalo = $zalo;
                $config->facebook = $facebook;
                $config->location = $location;
                $config->address = $address;
                $config->cskh = $cskh;
                $config->name_company = $name_company;
                $config->status = $status;
                $config->short_introduction_vi = $short_introduction_vi;
                $config->short_introduction_en = $short_introduction_en;
                $config->introduce_vi = $introduce_vi;
                $config->introduce_en = $introduce_en;
                $config->avatar = $avatarURL;

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
            dd($exception);
            return back();
        }
    }
}
