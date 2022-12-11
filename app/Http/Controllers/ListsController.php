<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;

class ListsController extends Controller
{
  public function index($slug)
  {
    return view('lists.index', [
      'list' => Lists::where('slug', $slug)->firstOrFail(),
    ]);
  }

  public function show()
  {
    return view('lists.show', [
      'lists' => Lists::all(),
    ]);
  }

  public function update(Request $request, $slug)
  {
    $list = Lists::where('slug', $slug)->first();
    $list->title = $request->title;
    $list->description = $request->description;
    $list->slug = $request->slug;
    $list->save();
    return response()->json(['success' => 'List updated successfully.']);
  }

  public function destroy($slug)
  {
    $list = Lists::where('slug', $slug)->first();
    $list->delete();
    return response()->json(['success' => 'List deleted successfully.']);
  }

  public function store(Request $request)
  {
    $list = new Lists();
    $list->title = $request->title;
    $list->description = $request->description;
    $list->slug = $request->slug;
    $list->save();
    return response()->json(['success' => 'List created successfully.']);
  }
}
