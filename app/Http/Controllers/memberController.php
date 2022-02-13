<?php

namespace App\Http\Controllers;
use App\member;

use Illuminate\Http\Request;

class memberController extends Controller
{
    public function index() {
        $members = member::all();
        return view('m_index',compact('members'));
    }

    public function insert() {
        return view('m_insert');
    }

    public function m_submit(Request $request) {
        $data = [
            'm_Name' => $request->get('name'),
            'm_Address' => $request->get('address'),
            'm_Age' => $request->get('age'),
            'm_Contact' => $request->get('contact'),
            'm_Email' => $request->get('email'),
        ];

        member::insert($data);
        return redirect()->route('m.index');
    }

    public function m_edit($id) {
        $member = member::where('id', $id)->first();
            if($member){
                return view('medit', compact('member'));
            }
    }

    public function update(Request $request, $id) {
                $data = [
                    'm_Name' => $request->get('name'),
                    'm_Address' => $request->get('address'),
                    'm_Age' => $request->get('age'),
                    'm_Contact' => $request->get('contact'),
                    'm_Email' => $request->get('email'),
                ];

                member::where('id', $id)->update($data);
                return redirect()->route('m.index');
            }

    public function delete($id) {
        $member = member::find($id);
        if($member) {
            member::destroy($id);
        }
        return redirect()->back();
    }
}
