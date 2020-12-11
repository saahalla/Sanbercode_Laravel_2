<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import DB package

class PertanyaanController extends Controller
{
    //
    public function create(){
        return view('questions.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            "title" => 'required|unique:questions',
            "content" => 'required'
        ]);

        $query = DB::table('questions')->insert([
            "title" => $request["title"],
            "content" => $request["content"]
        ]);

        return redirect('/pertanyaan/')->with('success', 'Pertanyaan berhasil di simpan');
    }
    public function index(){
        $questions = DB::table('questions')->get(); // select * from question
        // dd($questions);
        return view('questions.index', compact('questions'));
        // return view('questions.index', ["questions" => $questions]);
    }
    public function show($id){
        $question = DB::table('questions')->where('id', $id)->first();
        // dd($question);
        return view('questions.show', ["question" => $question]);
    }
    public function edit($id){
        $question = DB::table('questions')->where('id', $id)->first();

        return view('questions.edit', compact('question'));
    }
    public function update($id, Request $request){
        $query = DB::table('questions')
                    ->where('id', $id)
                    ->update([
                        'title' => $request['title'],
                        'content' => $request['content']
                    ]);


        return redirect('/pertanyaan')->with('success', 'Berhasil update post!');
    }
    public function destroy($id){
        $query = DB::table('questions')
                    ->where('id', $id)
                    ->delete();
        return redirect('/pertanyaan')->with('success', "Pertanyaan berhasil di hapus!");
    } 
}
