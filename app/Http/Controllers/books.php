<?php

namespace App\Http\Controllers;
use App\book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class books extends Controller
{
    public function index() {
        $books = book::all();
        return view('book',compact('books'));
    }

    public function create() {
        return view('book_create');
    }

    public function book_submit( Request $request) {
        // dd(str_random(5));
        $image_url = '';

        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
            // dd($image_url);
        }

        $data = [
            'book_Name' => $request->get('name'),
            'book_AuthorName' => $request->get('author'),
            'book_Price' => $request->get('price'),
            'book_Publications' => $request->get('publications'),
            'user_id' => Auth::check() ? Auth::user()->id : '',
            'cover' => $image_url ?? '',
        ];

        book::insert($data);
        return redirect()->route('book.index');
    }

    public function edit($id) {

        $book = book::where('id',$id)->first();
            if($book){
                return view('edit_book',compact('book'));
            }
    }

    public function update(Request $request, $id) {

        $image_url = '';

        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
        }

        $data = [
            'book_Name' => $request->get('name'),
            'book_AuthorName' => $request->get('author'),
            'book_Price' => $request->get('price'),
            'book_Publications' => $request->get('publications'),
            'cover' => $image_url ?? '',

        ];

        book::where('id',$id)->update($data);
        return redirect()->route('book.index');

    }

    public function delete($id) {
        $book = book::find($id);
        if($book) {
            book::destroy($id);
        }
        return redirect()->back();
    }

    public function demo() {
        return view('index');
    }

    public function dash() {
        return view('dashboard');
    }

    public function m_home() {
        return view('layouts.master');
    }
}
