<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Language;
use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $all_blog = Blog::all()->groupBy('lang');
        return view('backend.pages.blog.index')->with([
            'all_blog' => $all_blog
        ]);
    }
    public function new_blog(){
        $all_category = BlogCategory::where('lang','en')->get();
        $all_language = Language::all();
        return view('backend.pages.blog.new')->with([
            'all_category' => $all_category,
            'all_languages' => $all_language,
        ]);
    }
    public function store_new_blog(Request $request){
        $this->validate($request,[
           'category' => 'required',
           'blog_content' => 'required',
           'tags' => 'required',
           'excerpt' => 'required',
           'title' => 'required',
           'lang' => 'required',
           'image' => 'mimes:jpg,jpeg,png|max:10064',
        ]);

        $id = Blog::create([
            'blog_categories_id' => $request->category,
            'content' => $request->blog_content,
            'tags' => $request->tags,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'lang' => $request->lang,
            'user_id' => Auth::user()->id
        ])->id;

        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'blog-grid-'.$id.'.'.$image_extenstion;
            $image_large = 'blog-large-'.$id.'.'.$image_extenstion;
            if (check_image_extension($request->image)){
                $folder_path = 'assets/uploads/blog/';
                $resize_grid_image = Image::make($image)->resize(350,270);
                $resize_large_image = Image::make($image)->resize(730,400);
                $resize_grid_image->save($folder_path.$image_grid);
                $resize_large_image->save($folder_path.$image_large);
                Blog::where('id',$id)->update(['image'=>$image_extenstion]);
            }
        }
        return redirect()->back()->with([
            'msg' => 'New Blog Post Added...',
            'type' => 'success'
        ]);
    }
    public function edit_blog($id){
        $blog_post = Blog::find($id);
        $all_category = BlogCategory::where('lang',$blog_post->lang)->get();
        $all_language = Language::all();
        return view('backend.pages.blog.edit')->with([
            'all_category' => $all_category,
            'blog_post' => $blog_post,
            'all_languages' => $all_language,
        ]);
    }
    public function update_blog(Request $request,$id){
        $this->validate($request,[
            'category' => 'required',
            'lang' => 'required',
            'blog_content' => 'required',
            'tags' => 'required',
            'title' => 'required',
            'excerpt' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:10064',
        ]);
        Blog::where('id',$id)->update([
            'blog_categories_id' => $request->category,
            'content' => $request->blog_content,
            'tags' => $request->tags,
            'excerpt' => $request->excerpt,
            'lang' => $request->lang,
            'title' => $request->title
        ]);

        if ($request->hasFile('image')){
            $image = $request->image;
            $image_extenstion = $image->getClientOriginalExtension();
            $image_grid = 'blog-grid-'.$id.'.'.$image_extenstion;
            $image_large = 'blog-large-'.$id.'.'.$image_extenstion;
            if (check_image_extension($request->image)){
                $folder_path = 'assets/uploads/blog/';
                $resize_grid_image = Image::make($image)->resize(350,270);
                $resize_large_image = Image::make($image)->resize(730,400);
                $resize_grid_image->save($folder_path.$image_grid);
                $resize_large_image->save($folder_path.$image_large);
                Blog::where('id',$id)->update(['image'=>$image_extenstion]);
            }
        }

        return redirect()->back()->with([
            'msg' => 'Blog Post updated...',
            'type' => 'success'
        ]);
    }
    public function delete_blog(Request $request,$id){
        $blog_post = Blog::find($id);
        if (file_exists('assets/uploads/blog/blog-grid-'.$id.'.'.$blog_post->image)){
            unlink('assets/uploads/blog/blog-grid-'.$id.'.'.$blog_post->image);
        }
        if (file_exists('assets/uploads/blog/blog-large-'.$id.'.'.$blog_post->image)){
            unlink('assets/uploads/blog/blog-large-'.$id.'.'.$blog_post->image);
        }
        $blog_post->delete();
        return redirect()->back()->with([
            'msg' => 'Blog Post Delete Success...',
            'type' => 'danger'
        ]);
    }

    public function category(){
        $all_category = BlogCategory::all()->groupBy('lang');
        $all_language = Language::all();
        return view('backend.pages.blog.category')->with([
            'all_category' => $all_category,
            'all_languages' => $all_language
        ]);
    }
    public function new_category(Request $request){
        $this->validate($request,[
            'name' => 'required|string|max:191|unique:blog_categories',
            'lang' => 'required|string|max:191',
            'status' => 'required|string|max:191'
        ]);

        BlogCategory::create($request->all());

        return redirect()->back()->with([
            'msg' => 'New Category Added...',
            'type' => 'success'
        ]);
    }

    public function update_category(Request $request){
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'lang' => 'required|string|max:191',
            'status' => 'required|string|max:191'
        ]);

        BlogCategory::find($request->id)->update([
            'name' => $request->name,
            'status' => $request->status,
            'lang' => $request->lang,
        ]);

        return redirect()->back()->with([
            'msg' => 'Category Update Success...',
            'type' => 'success'
        ]);
    }

    public function delete_category(Request $request,$id){
        if (Blog::where('blog_categories_id',$id)->first()){
            return redirect()->back()->with([
                'msg' => 'You Can Not Delete This Category, It Already Associated With A Post...',
                'type' => 'danger'
            ]);
        }
        BlogCategory::find($id)->delete();
        return redirect()->back()->with([
            'msg' => 'Category Delete Success...',
            'type' => 'danger'
        ]);
    }

    public function Language_by_slug(Request $request){
        $all_category = BlogCategory::where('lang',$request->lang)->get();

        return response()->json($all_category);
    }

}
