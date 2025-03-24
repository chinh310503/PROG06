<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ChallengeController extends Controller
{
    public function teacher(){
        $challenge=DB::table('challenge')->get();
        return view('backend.challenge.teacher',compact('challenge'));
    }
    public function student(){
        $challenge=DB::table('challenge')->get();
        return view('backend.challenge.student',compact('challenge'));
    }
    public function form(){
        return view('backend.challenge.create');
    }
    public function create(Request $request){
        if($request->hasFile('challengefile')){
            $filename=$request->challengefile->getClientOriginalName();
            DB::table('challenge')->insert([
                'hint'=>$request->hint,
                'filename'=>$filename,
            ]);
            $request->challengefile->move(public_path('challenge'),$filename);
        }
        $challenge=DB::table('challenge')->get();
        return view('backend.challenge.teacher',compact('challenge'));
    }
    public function download($filename){
        $path=public_path('challenge/'.$filename);
        if(file_exists($path)){
            return response()->download($path);
        }
        return "File khong ton tai";
    }
    public function detail($cid){
        $chall=DB::table('challenge')->where('cid','=',$cid)->first();
        return view('backend.challenge.detail',compact('chall'));
    }
    public function solve($filename, Request $request){
        $file_info=pathinfo($filename);
        $correct_answer=$file_info['filename'];
        if ($request->answer === $correct_answer){
            $file_path=public_path('challenge/'.$filename);
            $content=file_get_contents($file_path);
            $status="Dap an chinh xac!";
            return view('backend.challenge.content',['status'=>$status, 'content'=>$content]);
        } else {
            $content='';
            $status="Dap an sai! Hay thu lai";
        }
        return view('backend.challenge.content',['status'=>$status, 'content'=>$content]);
    }
}
