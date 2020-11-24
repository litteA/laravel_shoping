<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ShopingController extends Controller {
    public function index (){
        $Goods = DB::table('goods')->get();
        return $Goods;
    }
    public function show (){
        $id = request()->id;
        $Goods = DB::table('goods')
            ->where('id',$id)
            ->get();
        return $Goods;
    }
    public function delete(){
        $id = request()->id;
        $delete = DB::table('goods')
            ->where('id','>',$id)
            ->delete();
        return $delete;
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|max:255|String',
            'price' => 'required|integer',
            'content' => 'String'
        ]);
        $name = $request->name;
        $price = $request->price;
        $content = $request->content;
        $update = DB::table('goods')
            ->where('id',$id)
            ->update([
                'name' => $name,
                'price' => $price,
                'content' => $content
            ]);
        $Goods = DB::table('goods')
            ->where('id',$id)
            ->get();
        return $Goods;
    }

    public function create (Request $request){
        $ifOf = $this->validate($request, [
            'name' => 'required|max:255|String',
            'price' => 'required|integer'
        ]);
        
        if (!$ifOf) {
            $name = $request->name;
            $price = $request->price;
            $content = $request->content;
            $id = DB::table('goods')
                ->insertGetId([
                    'name' => $name ,
                    'price' => $price ,
                    'content' => $content
                ]);
            $Goods = DB::table('goods')->where('id',$id)->get();
            return $Goods;
        } else {
            return '名字与价格不能为空！';
        }
        
    }
}