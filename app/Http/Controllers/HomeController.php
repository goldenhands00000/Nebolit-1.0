<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showComment($id)//показывает полный текст комментария
    {
        $comment=Comment::select(['id','rating','name','text','description'])->where('id',$id)->first();
        return view('full_comment')->with(['comment'=>$comment]);
    }

    public function showInformation()//показывает информацию о клинике
    {
        return view('about_us');
    }

    public function showReviews()//показывает комментарии о клинике
    {
        $comments=Comment::select(['id','rating','name','text'])->get();
        return view('all_reviews')->with(['comments'=>$comments]);
    }

    public function accountParlour()//личный кабинет
    {
        return view('account_parlour');
    }

    function send_comment(Request $request){
        $this->validate($request,[
            'rating' => 'required',
            'message' => 'required',
            'name'=> 'required'
        ]);
        $obj= new Comment;
        $obj->name=$request->name;
        $obj->clinic_id="2";
        $obj->rating=$request->rating;
        $obj->text=$request->message;
        $obj->description=$request->message;
        $obj->save();
        return back()->with('success', 'Спасибо за отзыв!');
    }





}
