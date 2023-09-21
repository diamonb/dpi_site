<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DielBusinessNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news/accueil')->with(compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.add_news");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'title' => 'required|max:255',
                'file1' => 'required|file',
                'file2' => 'file',
                'file3' => 'file',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('erreur_saving','Error during saving.'); 
            }
            $fileName1=null;
            $fileName2=null;
            $fileName3=null;

            if($request->file1 !== null){
            $fileName1 = "images/news/".time().'1.'.$request->file1->extension(); 
            }
            if($request->file2 !== null){
            $fileName2 = "images/news/".time().'2.'.$request->file2->extension();    
            } 
            if($request->file3 !== null){     
            $fileName3 = "images/news/".time().'3.'.$request->file3->extension(); 
            }
            //
            if($request->file1 !== null){
            $request->file1->move('images/news', $fileName1);
            }
            if($request->file2 !== null){
            $request->file2->move('images/news', $fileName2);
            }
            if($request->file3 !== null){
            $request->file3->move('images/news', $fileName3);
            }

            $news = new News;
     
            $news->title = $request->title;
            $news->description = $request->description;
            $news->image_un = $fileName1;
            $news->image_deux = $fileName2;
            $news->image_trois = $fileName3;

            if($news->save()){
                return redirect()->back()->with("succes","News save successfully");
            }else{
                return redirect()->back()->with("erreur","Error during saving");
            }
        }
       
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
