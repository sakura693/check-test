<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    //✅コンタクトフォームに遷移する//
    public function index(){
        return view('contact');
    }

    //✅確認画面に遷移する//
    public function confirm(ContactRequest $request){
        $contact = $request->only(['last_name', 'first_name', 'gender','email', 'address', 'building', 'select', 'content','detail']);
        
        $contact['tel'] = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

        return view('confirm', compact('contact'));
    }


    public function store(ContactRequest $request){
        $contact = $request->only(['last_name', 'first_name', 'gender','email', 'address', 'building', 'select', 'detail']);

        $contact['tel'] = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

        $category = Category::create(['content' => $request->input('content')]);

        $contact['category_id'] = $category->id;
        
        Contact::create($contact);
        return view('thanks');
    }



    //✅サンクスページでhomeを押すとコンタクトフォームに行く//
    public function home(){
        return view('contact');
    }

    
    
    
}


