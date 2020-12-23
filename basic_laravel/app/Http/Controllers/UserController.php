<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //php artisan make:controller UserController --resource
        // -- resource เป็นการ generate function จัดการฐานข้อมูลเบื้องต้น 

        return view('user.home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ข้อมูลจะมาทำงานที่ store 
        $this->validate($request, ['fname' => 'required', 'lname' => 'required','age'=>'required']);
        //ตรวจสอบว่า 2ตัวนี้ มีการส่งข้อมมูลมาไหม
        //required จำเป็นต้องป้อนข้อมูล 
        $user = new User(
            [
                'fname' => $request->get('fname'),
                'lname' => $request->get('lname'),
                'age'=>$request->get('age')
            ]
        ); //สร้างobject หรือ model user ขึ้นมา

        //get(fname) get(lname) คือค่าที่รับมาจากform
        //แล้วเอาค่าไปใส่ ใน 'fname' 'lname' ใน model user
        //ในmodel User ก็ประกาศ รับค่าไว้   protected $filable=['fname','lname']


        $user->save(); //ทำการ save 
        return redirect()->route('user.home')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
