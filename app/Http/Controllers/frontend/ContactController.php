<?php

namespace App\Http\Controllers\frontend;

use App\Enums\CategoryStatus;
use App\Enums\ConfigStatus;
use App\Enums\MenuStatus;
use App\Enums\NewsStatus;
use App\Enums\PagesStatus;
use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Category;
use App\Models\Configs;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\News;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $news = News::where('status', NewsStatus::ACTIVE)->get();
        $pages = Pages::where('status', PagesStatus::ACTIVE)->get();
        $cate = Category::where('status', CategoryStatus::ACTIVE)->get();
        $configs = Configs::where('status', ConfigStatus::ACTIVE)->first();
        $banners = Banners::all();
        return view('frontend.layouts.contact', compact('news', 'pages', 'configs', 'banners', 'cate'));
    }

    public function createContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $config = Configs::orderBy('id', 'DESC')->first();
        $email = $config->email;
        Mail::send('frontend/widgets/mailCode', ['email' => $email, 'contact' => $contact], function ($message) use ($email) {
            $message->to($email, 'Verify mail!')->subject
            ('Verify mail');
            $message->from('supprot.ilvietnam@gmail.com', 'Support IL');
        });

        $contact->save();
        alert()->success('Success', 'Thành công');
        return back();
    }
}
