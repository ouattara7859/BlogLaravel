<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Userblogs;
use App\Models\blogs;
use App\Models\Contact;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;





class UserController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth')
    //     ->except(['']);;
    // }
    public function Index(Request $request)
    {
        # code...
        if ($request->search) {
            # code...
            $h2 = "Recherche du mot clé: $request->search";
            $blog = Blog::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%'. $request->search. '%')
                ->latest()
                ->paginate(6);


            $categories = Category::latest()->get();
            return view('user_template.blog', compact('categories','blog','h2'));


        }
        elseif ($request->category) {
            # code...
            $h2 = "Listes categories: $request->category";

            $blog = Blog::join('categories', 'categories.id', '=' , 'blogs.category_count_blog')
            ->where('categories.category',$request->category)
            ->orderBy('blogs.id', 'desc')
            ->paginate(6);

            $categories = Category::latest()->get();
            return view('user_template.blog', compact('categories','blog','h2'));


        }
        else{


            $h2 = "Listes Blogs ";

            // $blog = Blog::join('categories', 'categories.id', '=' , 'blogs.category_count_blog')
            // ->orderBy('blogs.id', 'desc')
            // ->paginate(6);
            // dd($blog);
            $blog = Blog::join('categories', 'categories.id', '=' , 'blogs.category_count_blog')
            ->orderBy('blogs.id', 'desc')
            // ->get(['blogs.*', 'categories.category'])
            ->paginate(6)

         ;


            $categories = Category::latest()->get();
           return view('user_template.blog', compact('categories','blog','h2'));

            }

            // $h2 = "test";


            // $blog = Blog::join('categories', 'categories.id', '=' , 'blogs.category_count_blog')
            // ->orderBy('blogs.id', 'desc')
            // ->paginate(6);
        // return view('user_template.blog', compact('categories','blog','h2'));
    }

    public function DetailBlog($id)
    {


        $detail = Blog::findOrFail($id);

        $subcat_id = Blog::where('id', $id)->value('category_count_blog');

        $related_products = Blog::where('category_count_blog', '=', $subcat_id)->latest()->get();


        return view('user_template.detail_blog', compact('detail', 'related_products'));
    }
    public function InscriptionStore(Request $request)
    {
        # code...
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:userblogs'],
            'pwd' => ['required'],



        ]);

        Userblogs::create([
            'name' => $request->name,
            'email' => $request->email,
            'pwd' => Hash::make($request->pwd),

        ]);

        return redirect()
        ->route('connexion') ;

    }

    public function Connexion()
    {
        # code...


       return view('user_template.connexion');
    }

    public function ConnexionStore(Request $request)
    {
        # code...
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'pwd' => ['required'],
        ]);

        $userblog = Userblogs::where('email', '=', $request->email)->first();
        if ($userblog) {
            if (Hash::check($request->pwd, $userblog->pwd)) {
                $request->session()->put('userblog', $userblog);
                return redirect()->route('home');
            }else{
                 return back()->with('error', 'Invalid password');

             }
        }else{
            return back()->with('error', 'Invalid email');
        }
    }

    public function Inscription()
    {
        # code...
       return view('user_template.inscription');
    }

    public function Deconnexion()
    {
        # code...
        // $userblog = Userblogs::find($id);
        if(Session::has('userblog')){
            Session::pull('userblog');
            return redirect()->route('home');
        }

    }
    public function Contact()
    {
        # code...
        return view('user_template.contact');
    }
    public function ContactStore(Request $request)
    {
        # code...
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:contacts'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()
        ->route('contact')
        ->with('valider', 'Message envoyer avec success');

    }

    public function Services()
    {
        # code...
        return view('user_template.services');
    }

    function MessageStore(Request $request)
    {
        # code...



        $request->validate([
            'nom' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:commentaires'],
        ]);

        Commentaire::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'messages' => $request->messages,
        ]);

        return redirect()
        ->route('detail_blog');

    }
    public function portfiolo()
    {
        return view('user_template.portfolio');
    }

}
