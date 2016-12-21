<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Users;
use App\Results;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register_check(Request $request)
    {
    	$m=null;
    	$inputs['name']=$request->get("username");
    	$inputs["phone"]=$request->get("phone");
    	$inputs["password"]=$request->get("password");
    	$inputs["student_id"]=$request->get("student_id");
    	$gets1=DB::table("users")->where("name",$inputs['name'])->first();
    	$gets2=DB::table("users")->where("student_id",$inputs["student_id"])->first();
    	if($gets1)
    	{
    		return view("register",["fail1"=>"the username is token"]);
    	}
    	else if($gets2)
    	{
    		return view("register",["fail2"=>"the ID is token"]);
    	}

    	else
    	{
    		//Users::create($inputs);
    		//DB::insert("insert into users (name,password,student_id,phone)values(?,?,?,?)",[$inputs['name'],$inputs['password'],$inputs['student_id'],$inputs["phone"]]);
    		Users::create($inputs);
    		Session::put("username",$inputs['name']);
    		Session::put("id",$inputs["student_id"]);
    		return view("index");
    	}
    }
    public function login_check(Request $request)
    {
    	$name=$request->get("username");
    	$password=$request->get("password");
    	if($name=="admin"&&$password=="admin")
    	{
    		Session::put("username",$name);
    		return view("admin");
    	}
    	else
    	{
    		$gets=DB::table("users")->where("name",$name)->first();
    		if(!$gets)
    		{
    			return view("login",["fail1"=>"zhe user name is wrong"]);
    		}
    		else
    		{
    				$password_check=$gets->password;
    				if($password==$password_check)
    			{
    				$id=$gets->student_id;
    				//dd($id);
    				Session::put("username",$name);
    				Session::put("id",$id);
    				//dd(Session::get("id"));
    				return view("index");
    			}
    			else
    			{
    				return view("login",["fail2"=>"the password is wrong"]);
    			}
    		}
    	}
    } 
   
    public function baoming1(Request $request)
    {
    	//dd(Session::get("username"));
    	$inputs['student_id']=Session::get("id");
    	//dd($inputs['student_id']);
    	$inputs['game_id']="100";
    	$inputs['game_name']="男子100米";
    	$gets=DB::table("results")->where("student_id",$inputs['student_id'])
    	->where("game_id",$inputs['game_id'])->first();
    	if($gets)
    	{
    		return view("index",["fail"=>"你已经报名过次比赛"]);
    	}
    	else{
    	Results::create($inputs);
    	//DB::insert("insert into results (student_id,game_id)values(?,?)",[$inputs['student_id'],$inputs['game_id']]);
    	return view("index");
    	}
    }
    public function baoming2(Request $request)
    {
    	//$inputs['student_id']=$request->get("student_id");
    	$inputs['student_id']=Session::get("id");
    	//dd($inputs['student_id']);
    	$inputs['game_id']="200";
    	$inputs['game_name']="男子400米";
    	$gets=DB::table("results")->where("student_id",$inputs['student_id'])
    	->where("game_id",$inputs['game_id'])->first();
    	if($gets)
    	{
    		return view("index",["fail2"=>"你已经报名过次比赛"]);
    	}
    	else{
    	Results::create($inputs);
    	//DB::insert("insert into results (student_id,game_id)values(?,?)",[$inputs['student_id'],$inputs['game_id']]);
    	return view ('index');
    	}
    }
    public function baoming3(Request $request)
    {
    	//$inputs['student_id']=$request->get("student_id");
    	$inputs['student_id']=Session::get("id");
    	//dd($inputs['student_id']);
    	$inputs['game_id']="300";
    	$inputs['game_name']="男子4*100米";
    	$gets=DB::table("results")->where("student_id",$inputs['student_id'])
    	->where("game_id",$inputs['game_id'])->first();
    	if($gets)
    	{
    		return view("index",["fail3"=>"你已经报名过次比赛"]);
    	}
    	else{
    	Results::create($inputs);
    	//DB::insert("insert into results (student_id,game_id)values(?,?)",[$inputs['student_id'],$inputs['game_id']]);
    	return view("index");
    	}
    }
    public function baoming4(Request $request)
    {
    	//$inputs['student_id']=$request->get("student_id");
    	$inputs['student_id']=Session::get("id");
    	//dd($inputs['student_id']);
    	$inputs['game_id']="400";
    	$inputs['game_name']="女子4*100米";
    	$gets=DB::table("results")->where("student_id",$inputs['student_id'])
    	->where("game_id",$inputs['game_id'])->first();
    	if($gets)
    	{
    		return view("index",["fail4"=>"你已经报名过次比赛"]);
    	}
    	else{
    	Results::create($inputs);
    	//DB::insert("insert into results (student_id,game_id)values(?,?)",[$inputs['student_id'],$inputs['game_id']]);
    	return view("index");
    	}
    }
     public function logout()
    {
    	Session::flush();
    	return redirect("login");
    }
    public function SelfCenter()
    {
    	$id=Session::get("id");
    	$gets=DB::table("results")->where("student_id",$id)->join("game","game.game_id","=","results.game_id")->get();
    	if(!$gets)
    	{
    		return view ("Selfcenter",["fail"=>"你还没有报名任何比赛"]);
    	}
    	else
    	{
    		return view("Selfcenter",["gets"=>$gets]);
    	}
    }
    public function grades1(Request $request)
    {
    	$id=$request->get("student_id");
    	$ranking=$request->get("ranking");
    	$grades=$request->get("grades");
    	$game_id="100";
    	DB::update("update results set ranking=?,grades=? where game_id=? and student_id=?",[$ranking,$grades,$game_id,$id]);
    	return view("admin");
    }
     public function grades2(Request $request)
    {
    	$id=$request->get("student_id");
    	$ranking=$request->get("ranking");
    	$grades=$request->get("grades");
    	$game_id="200";
    	DB::update("update results set ranking=?,grades=? where game_id=? and student_id=?",[$ranking,$grades,$game_id,$id]);
    	return view("admin");
    }
     public function grades3(Request $request)
    {
    	$id=$request->get("student_id");
    	$ranking=$request->get("ranking");
    	$grades=$request->get("grades");
    	$game_id="300";
    	DB::update("update results set ranking=?,grades=? where game_id=? and student_id=?",[$ranking,$grades,$game_id,$id]);
    	return view("admin");
    }
     public function grades4(Request $request)
    {
    	$id=$request->get("student_id");
    	$ranking=$request->get("ranking");
    	$grades=$request->get("grades");
    	$game_id="400";
    	DB::update("update results set ranking=?,grades=? where game_id=? and student_id=?",[$ranking,$grades,$game_id,$id]);
    	return view("admin");
    }
    public function fengyunbang()
    {
    	$gets1=DB::table("results")->join('users','users.student_id','=','results.student_id')->where("game_id","100")->orderBy("ranking","asc")->get();
    	$gets2=DB::table("results")->join('users','users.student_id','=','results.student_id')->where("game_id","200")->orderBy("ranking","asc")->get();
    	$gets3=DB::table("results")->join('users','users.student_id','=','results.student_id')->where("game_id","300")->orderBy("ranking","asc")->get();
    	$gets4=DB::table("results")->join('users','users.student_id','=','results.student_id')->where("game_id","400")->orderBy("ranking","asc")->get();
    	return view("fengyunbang",["gets1"=>$gets1,"gets2"=>$gets2,"gets3"=>$gets3,"gets4"=>$gets4]);
    }
}
