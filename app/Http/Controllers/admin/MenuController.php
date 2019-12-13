<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allmenu = new Menu;
        try {
            $menus=$allmenu->tree();
        } catch (Exception $e) {
            //no parent category found
        }

        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_name'  =>  'required',
            'parent_id'  => 'required'
        ]);

        $menu = new Menu();
        $menu->menu_name = $request->menu_name;
        $menu->slug = Str::slug($request->menu_name);
        $menu->parent_id  =  $request->parent_id;
        $menu->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $categories = new Menu();
        $parent = $categories->tree();
        return view('admin.menu.edit',compact('menu','parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'menu_name'  =>  'required',
            'parent_id'  => 'required'
        ]);

        $menu->menu_name = $request->menu_name;
        $menu->slug = Str::slug($request->menu_name);
        $menu->parent_id  =  $request->parent_id;
        $menu->save();
        return redirect()->route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
         $menu->delete();
         return redirect()->route('admin.menu.index');
    }
}
