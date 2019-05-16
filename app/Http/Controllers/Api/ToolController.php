<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ToolCollection;
use App\Http\Resources\Tool as ToolResource;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->get('tag')){
            $search = trim($request->get('tag'));
            $tag = Tag::where('name', 'like', '%'.$search.'%')->first();
            return new ToolCollection($tag->tools);
        }

        return new ToolCollection(Tool::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();

        try{

            $request->validate([
                'title'=> 'required|string',
                'description'=> 'required|string',
                'link'=> 'required|url',
                'tags'=> 'sometimes|array'
            ]);

            $tool = Tool::create([
                'title'=> $request->title,
                'link'=> $request->link,
                'description'=> $request->description,
            ]);

            if($request->get('tags')){

                $tags = [];

                foreach($request->get('tags') as $tag) {
                    $tag = Tag::firstOrCreate(['name' => $tag ]);
                    $tags[] = $tag->id;
                }

                $tool->tags()->sync($tags);
            }

            DB::commit();

            return new ToolResource($tool);

        }catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message'=> $e->getMessage(),
                'erros' =>  $e->errors()
            ],422);

        }catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'message'=> $e->getMessage(),
                'erros' =>  $e->errors()
            ],500);

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
        $tool = Tool::find($id);
        if(!$tool)
            return response()->json(['error' => 'Registro não existe'],404);

        $tool->delete();
        return response()->json(['Deletado com sucesso!!!'],200);
    }
}
