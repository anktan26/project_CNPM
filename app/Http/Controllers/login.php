<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\tbl_registers;
use Illuminate\Support\Facades\DB;
use Illuminate \ Database \ Query \ Builder;
use Illuminate\Support\Facades\Hash;
class login extends Controller
{
    public function index(){
        return view('auth/register');
    }
    public function register(Request $request){
        $new=new tbl_registers();
        $new->gioitinh=$request->gioitinh;
        $new->name=$request->name;
        $new->ho=$request->ho;
        $new->day=$request->day;
        $new->month=$request->month;
        $new->year=$request->year;
        $new->email=$request->email;
        $new->password=Hash::make($request->password);
        $new->save();
        return view('welcome');
    }
    public function postLogin(Request $request){
        //  dd($request->all());
    //    $request->validate([
    //         'email_lo'=>'required|email',
    //         'password_lo'=>'required|min:2'
    //    ],
    //     [
    //         'email_lo.required'=>'email la truong bat buoc',
    //         'email_lo.email'=>'email khong dung dinh dang',
    //         'password_lo.required'=>'mat khau la truong bat buoc',
    //         'password_lo.min'=>'mat khau phai it nhat 2 ky tu'
    //     ]);
    //     $table =DB::table('tbl_registers')->whereColumn('email','password')->post();
        if(Auth::attempt(['email'=>$request->email_lo,'password'=>$request->password_lo])){
            return view('welcome');
        }
        else{
                return view('auth/register')->with('thongbao','dang nhap khong thanh cong');
        }
    }
    
}
