<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Category;
use Illuminate\Http\Request;
use Session;
use Image;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::paginate(5);

      return view('admin.categories.index', ['categories' => $categories]);
      //return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validation
      $this->validate($request, array(
        'name' => 'required|max:255',
      )); //returns to request page if validation failed with the errors stored in the variable $errors

      // store in database
      $category = new Category;   //create new instance
      $category->name = $request->name;
      $category->description = $request->description;

      if($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/categories/' . $filename);
          Image::make($image)->resize(800,800)->save($location);
          $category->image = $filename;
      }

      $category->save();

      //send success message through session
      Session::flash('success', 'Category created successfully!');
      //flash() is a var type inside session, exists for only a single user request
      //to store a var throughout the session use put()

      return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $category = Category::find($id);
      return view('admin.categories.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = Category::find($id);
      return view('admin.categories.edit')->withCategory($category);
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
        $this->validate($request, array(
          'name' => 'required|max:255'
        ));
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/categories/' . $filename);
            Image::make($image)->resize(800,800)->save($location);
            $category->image = $filename;
        }
        $category->save();

        Session::flash('success', 'Category updated successfully!');

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        try {
          $category->delete();
          Session::flash('success', 'Category deleted successfully!');
        }
        catch(QueryException $e) {
          Session::flash('warning', 'Failed to perform the operation!');
          return redirect()->route('categories.index');
          //dd($e->getMessage());
        }

        return redirect()->route('categories.index');

    }
}
