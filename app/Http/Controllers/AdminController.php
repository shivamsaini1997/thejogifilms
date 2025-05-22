<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GlobalSetting;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\User;
use App\Models\WeddingFilms;
use App\Models\WeddingWork;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Global_;

class AdminController extends Controller
{
    public function Dashboard(){
        $allcategory = Category::get();

        $Weddingpics = WeddingWork::where('category','Wedding Pics')->get();
        $prewedding = WeddingWork::where('category','Pre Wedding')->get();
        $brides = WeddingWork::where('category','Brides')->get();
        $products = WeddingWork::where('category','Products')->get();
        $kids = WeddingWork::where('category','Kids')->get();
        $weddingfilmwork = WeddingFilms::get();
        $data = compact('allcategory', 'Weddingpics', 'weddingfilmwork','products','brides','prewedding','kids');
        return view('admin.Dashboard.dashboard')->with($data);
    }
    public function loginAdmin(){
        return view('admin.login');
    }
    public function adminLogin(Request $request): RedirectResponse{
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')->with('success', 'You have successfully logged in.');
        }
    
        return redirect('/admin')->with('error', 'Oops! You have entered invalid credentials.');
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();

        return redirect('/admin')->with('success', 'You have successfully logged out.');
    }
    
    public function registerAdmin(){
        $register = User::all();
        $data = compact('register');
        return view('admin.register')->with($data);
    }
    public function adminRegister(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250|unique:users,email',
            'password' => 'required|min:8',
            'password-confir' => 'required|same:password',
            'role_type' => 'required|in:1,2',
        ]);
    
        // Create a new user
        User::create([
            'name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'type_role' => $validatedData['role_type'],
        ]);
    
        $register = User::all();
    
        // Pass the data to the view with success message
        return view('admin.register')->with([
            'register' => $register,
            'success' => 'Admin successfully registered',
        ]);
    }
   
    public function deleteRegister($id){
        $register = User::find($id);
        $register->delete();
        return back();
    }


    public function forgetPassword(){
        return view('admin.reset-password');
    }

    public function forgetPasswordSubmit(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
    
        $token = Str::random(64);
        $url = route('reset.password.get', Crypt::encrypt($request->email));
    
        // Delete existing token if it exists
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();
    
        // Insert the new token
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
    
        Mail::send('admin.auth.reset_password_email', ['url' => $url], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });
    
        return back()->with('success', 'We have emailed your password reset link!');
    

    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($email) {
        // dd(decrypt($email));
        $data['email']=decrypt($email);
        return view('admin.auth.forgetPasswordLink',$data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request){
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);


        return redirect('/admin')->with('success', 'Your password has been changed!');
    }

    public function global(){
        $global =  GlobalSetting::first();
        $data = compact('global');
        // dd($global);
        return view('admin.Global.global')->with($data);
    }
    public function storeGlobal(Request $request){
        $request->validate([
            'logo' => 'nullable|image|mimes:jpg,jpeg,webp,png|max:2048', 
            'insta' => 'required|url',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
            'phone' => 'required|regex:/^[0-9]{10,12}$/',  
            'office' => 'required|regex:/^[0-9]{10,12}$/',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);
    
        // Check if data already exists
        $global = GlobalSetting::first(); 
    
        if (!$global) {
            $global = new GlobalSetting(); // Create new if not exists
        }
    
        // Handle file upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_logo_' . $file->getClientOriginalName();
            $file->move(public_path('upload/_logo_/'), $filename);
            $global->logo = 'upload/_logo_/' . $filename;
        }
    
        // Update fields
        $global->insta = $request->insta;
        $global->facebook = $request->facebook;
        $global->youtube = $request->youtube;
        $global->phone = $request->phone;
        $global->office = $request->office;
        $global->email = $request->email;
        $global->address = $request->address;
    
        // Save data (either create or update)
        $global->save();
    
        return redirect()->route('global')->with('success', 'Global Settings Updated Successfully');
    }
    

    public function addWeddingWork() {
        $allcategory = Category::where('category', '!=', 'Wedding Films')->get();
        $title = 'Add Wedding Work';
        $url = url('/admin/add-wedding-work');
        $data = compact('title', 'url' ,'allcategory');
        return view('admin.Wedding_Work.add-wedding-work')->with($data);
    }
    public function storeWeddingWork(Request $request){
        $request->validate([
            'category' => 'required|string|max:255',
            'work_name' => 'required|string|max:255',
            'work_image' => 'required|image|mimes:jpg,jpeg,webp,AVIF|max:2048'
        ]);
        $workwedding = new WeddingWork();
        $workwedding->category = $request->input('category');
        $workwedding->work_name = $request->input('work_name');
       
        if($request->hasFile('work_image')){
            $file = $request->file('work_image');
            $filename = time() . '_work_image_' . $file->getClientOriginalName();
            $file->move(public_path('upload/_workwedding_/'), $filename);
            $workwedding->work_image = 'upload/_workwedding_/' . $filename;
        }
        $workwedding->save();
        return redirect()->route('manage-wedding-work')->with('success', 'Wedding Work Added Successfully');
    }
    public function updateWeddingWork(Request $request, $id){
        $request->validate([
            'category' => 'string',
            'work_name' => 'string',
            
            'work_image' => 'image|mimes:jpg,jpeg,webp,avif|max:2048'
        ]);
        $workwedding = WeddingWork::find($id);
        $workwedding->category = $request->input('category');
        $workwedding->work_name = $request->input('work_name');
     
        if($request->hasFile('work_image')){
            $file = $request->file('work_image');
            $filename = time() . '_work_image_' . $file->getClientOriginalName();
            $file->move(public_path('upload/_workwedding_/'), $filename);
            $workwedding->work_image = 'upload/_workwedding_/' . $filename;
        }
        $workwedding->save();
        return redirect()->route('manage-wedding-work')->with('success', 'Wedding Work Update Successfully');
    }
    public function editWeddingWork($id){
        $allcategory = Category::where('category', '!=', 'Wedding Films')->get();
        $workwedding = WeddingWork::find($id);
        $title = 'Edit Wedding Work';
        $url =url('/admin/manage-wedding-work/update/') . "/" .$id;
        $data = compact('workwedding' , 'title' , 'url','allcategory');
        return view('admin.Wedding_Work.add-wedding-work')->with($data);
    }
    public function manageWeddingWork(){
        $workwedding = WeddingWork::orderBy('created_at', 'desc')->get();
        $data = compact('workwedding');
        return view('admin.Wedding_Work.manage-wedding-work')->with($data);
    }
    public function statusWeddingWork($id, $status){
        $workwedding = WeddingWork::find($id);
        $workwedding->status = $status;
        $workwedding->save();
        return back();
    }
    public function deleteWeddingWork($id){
        $workwedding = WeddingWork::find($id);
        $workwedding->delete();
        return back();
    }

    public function addWeddingFilms(){
        $title = 'Add Weeding Films';
        $url = url('/admin/add-wedding-films');
        $data = compact('title','url');
        return view('admin.Wedding_Films.add-wedding-flims')->with($data);
    }
    public function storeWeddingFilms(Request $request){
        $weddingfilmwork = new WeddingFilms();
        $request->validate([
            'video_url' => 'required|string|url',
            'video_title' => 'required|string',
            'discreption' => 'required|string',
        ]);
        $weddingfilmwork->video_url = $request->input('video_url');
        $weddingfilmwork->video_title = $request->input('video_title');
        $weddingfilmwork->discreption = $request->input('discreption');
        $weddingfilmwork->save();
        return redirect()->route('manage-wedding-films')->with('success', 'Wedding Films Added Successfully');
    }

    public function manageWeddingfilms(){
        $weddingfilmwork = WeddingFilms::orderBy('created_at', 'desc')->get();
        $data = compact('weddingfilmwork');
        return view('admin.Wedding_Films.manage-wedding-films')->with($data);
    }
    public function editWeddingFilms($id){
        $weddingfilmwork = WeddingFilms::find($id);
        $title = 'Edit Weeding Films';
        $url = url('/admin/manage-wedding-films/update') . "/" . $id;
        $data = compact('weddingfilmwork','title','url');
        return view('admin.Wedding_Films.add-wedding-flims')->with($data);
    }
    public function updateWeddingFilms(Request $request, $id){
        $weddingfilmwork = WeddingFilms::find($id);
        $request->validate([
            'video_url' => 'required|string|url',
            'video_title' => 'required|string',
            'discreption' => 'required|string',
        ]);
        $weddingfilmwork->video_url = $request->input('video_url');
        $weddingfilmwork->video_title = $request->input('video_title');
        $weddingfilmwork->discreption = $request->input('discreption');
        $weddingfilmwork->save();
        return redirect()->route('manage-wedding-films')->with('success', 'Wedding Films Updated Successfully');
    }
    public function statusWeddingFilms($id, $status){
        $weddingfilmwork = WeddingFilms::find($id);
        $weddingfilmwork->status = $status;
        $weddingfilmwork->save();
        return back();
    }
    public function deleteWeddingFilms($id){
        $weddingfilmwork = WeddingFilms::find($id);
        $weddingfilmwork->delete();
        return back();
    }
    public function addTestimonials(){
        $title = "Add Testimonials";
        $url = url('/admin/add-testimonials');
        $data = compact('title','url');
        return view('admin.Testimonials.add-testimonials')->with($data);
    }
    public function manageTestimonials(){
        $testimonials = Testimonials::get();
        $data = compact('testimonials');
        return view('admin.Testimonials.manage-testimonials')->with($data);
    }
    public function storeTestimonials(Request $request){
        $testimonial = new Testimonials();
        $request->validate([
            'testimonial_image' => 'required|image|mimes:jpg,jpeg,webp,AVIF|max:2048',
            'testimonial_title' => 'required|string',
            'discreption' => 'required|string',
        ]);
        if($request->hasFile('testimonial_image')){
            $file = $request->file('testimonial_image');
            $filename = time() . '_testimonial_image_' . $file->getClientOriginalName();
            $file->move(public_path('upload/testimonial_image/'), $filename);
            $testimonial->testimonial_image = 'upload/testimonial_image/' . $filename;
        }
        $testimonial->testimonial_title = $request->input('testimonial_title');
        $testimonial->discreption = $request->input('discreption');
        $testimonial->save();
        return redirect()->route('manage-testimonials')->with('success', 'Testimonial Added Successfully');
    }
    public function editTestimonials($id){
        $testimonial =  Testimonials::find($id);
        $title = 'Edit Testimonial';
        $url = url('/admin/manage-testimonials/update') . "/" . $id;
        $data = compact('testimonial' ,'title','url');
        return view('admin.Testimonials.add-testimonials')->with($data);
    }
    public function updateTestimonials(Request $request, $id){
        $testimonial =  Testimonials::find($id);
        $request->validate([
            'testimonial_image' => 'image|mimes:jpg,jpeg,webp,AVIF|max:2048',
            'testimonial_title' => 'string',
            'discreption' => 'string',
        ]);
        if($request->hasFile('testimonial_image')){
            $file = $request->file('testimonial_image');
            $filename = time() . '_testimonial_image_' . $file->getClientOriginalName();
            $file->move(public_path('upload/testimonial_image/'), $filename);
            $testimonial->testimonial_image = 'upload/testimonial_image/' . $filename;
        }
        $testimonial->testimonial_title = $request->input('testimonial_title');
        $testimonial->discreption = $request->input('discreption');
        $testimonial->save();
        return redirect()->route('manage-testimonials')->with('success', 'Testimonial Updated Successfully');
    }
    public function statusTestimonials($id, $status){
        $testimonial =  Testimonials::find($id);
        $testimonial->status = $status;
        $testimonial->save();
        return back();
    }
    public function deleteTestimonials($id){
        $testimonial =  Testimonials::find($id);
        $testimonial->delete();
        return back();
    }
    public function addTeam(){
        $title = 'Add Team';
        $url = url('/admin/add-team');
        $data = compact('title' , 'url');
        return view('admin.Team.add-team')->with($data);
    }
    public function storeTeam(Request $request){
        $teams = new Team();
        $request->validate([
            'team_name' => 'required|string',
            'team_image' => 'required|image|mimes:jpg,jpeg,webp,AVIF|max:2048',
        ]);
        $teams->team_name =  $request->input('team_name');
        if($request->hasFile('team_image')){
            $file = $request->file('team_image');
            $filename = time() . '_team_image_' . $file->getClientOriginalName();
            $file->move(public_path('upload/team_image/'), $filename);
            $teams->team_image = 'upload/team_image/' . $filename;
        }
        $teams->save();
        return redirect()->route('manage-team')->with('success', 'Team Added Successfully');
    
    }
    public function manageTeam(){
        $teams = Team::get();
        $data = compact('teams');
        return view('admin.Team.manage-team')->with($data);
    }
    public function editTeam($id){
        $teams = Team::find($id);
        $title = 'Edit Team';
        $url = url('/admin/manage-team/update') . "/" .$id;
        $data = compact('teams','title', 'url');
        return view('admin.Team.add-team')->with($data);
    }
    public function updateTeam(Request $request, $id){
        $teams = Team::find($id);
        $request->validate([
            'team_name' => 'required|string',
            'team_image' => 'image|mimes:jpg,jpeg,webp,AVIF|max:2048',
        ]);
        $teams->team_name =  $request->input('team_name');
        if($request->hasFile('team_image')){
            $file = $request->file('team_image');
            $filename = time() . '_team_image_' . $file->getClientOriginalName();
            $file->move(public_path('upload/team_image/'), $filename);
            $teams->team_image = 'upload/team_image/' . $filename;
        }
        $teams->save();
        return redirect()->route('manage-team')->with('success', 'Team Updated Successfully');

    }
    public function statusTeam($id, $status){
        $teams = Team::find($id);
        $teams->status = $status;
        $teams->save();
        return back();
    }
    public function deleteTeam($id){
        $teams = Team::find($id);
        $teams->delete();
        return back();
    }
}
