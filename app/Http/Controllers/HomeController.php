<?php

namespace App\Http\Controllers;

use App\Enums\CategoryStatus;
use App\Enums\ConfigStatus;
use App\Enums\MenuStatus;
use App\Enums\NewsStatus;
use App\Enums\PagesStatus;
use App\Enums\UserStatus;
use App\Models\Banners;
use App\Models\Category;
use App\Models\Configs;
use App\Models\Menu;
use App\Models\News;
use App\Models\Pages;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $configs = Configs::where('status', CategoryStatus::ACTIVE)->first();
        return view('admin.home', compact('configs'));
    }

    public function checkAdmin()
    {
        $userRole = Auth::user()->role_id;
        $isAdmin = false;
        $role = Role::find($userRole);
        if ($role->name == \App\Enums\Role::ADMIN) {
            $isAdmin = true;
        }
        return $isAdmin;
    }

    private function sendMail($data, $email)
    {
        Mail::send('frontend/widgets/mailCode', $data, function ($message) use ($email) {
            $message->to($email, 'Verify mail!')->subject
            ('Verify mail');
            $message->from('supprot.ilvietnam@gmail.com', 'Support IL');
        });
    }
}
