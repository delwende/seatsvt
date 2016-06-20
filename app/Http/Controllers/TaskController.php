<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Response;
use DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Session;
class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

  protected $date ;
  protected $size ;
    
	protected $file_name ;
	protected $type ;


    protected $course_id ;
    protected $year_of_exam ;
   protected  $prof ;
    protected $examen ;
   
    protected $database_table;
	
 	protected $table;
 	protected $course_name;
	protected $content;
	protected $name_of_cours;
protected $year_of_grad;
 	//protected $course_id;
	
public function __construct()
    {
        //$this->middleware('auth');
        $this->date = "";
   $this->size = "";
    
	 $this->file_name = "";
	 $this->type = "";


     $this->course_id = "";
     $this->year_of_exam = "";
     $this->prof = "";
     $this->examen = "";
   
     $this->database_table= "";
	
 	 $this->table="";
 	 $this->course_name="";
	 $this->content="";
	 $this->name_of_course="";
    }
	public function index(Request $request)
{
	

    $course_name="";
    $annee=$request->course_id;
    $show_upload=false;
    $show_table=true;
    $id=$request->year;
    $course1s = DB::table('Course1')->get();
    $course2s = DB::table('Course2')->get();
    $course3s = DB::table('Course3')->get();
    $course4s = DB::table('Course4')->get();
    $course5s = DB::table('Course5')->get();
//annee1  
    
    return view('examdisplay',
     ['course1s' => $course1s,
     'course2s' => $course2s,
     'course3s' => $course3s,
     'course4s' => $course4s,
     'course5s' => $course5s,
     'annee'=>$annee,
     'id'=>$id,
     'content'=> $this->content,
     'course_name' =>$this->name_of_course,
     'show_upload'=>$show_upload,
     'show_table'=>$show_table
     ]);
}

public function display_table($year_grad,$course_id){
	$table=substr($year_grad, 5,6);
	$table='Course'.$table;
	$get_course_name=DB::table($table)->select('course')->where( 'id',$course_id)->get();
	foreach ($get_course_name as $value) {
		$name_of_course=$value->course;
	}
$this->content=DB::table($year_grad)->where("course_id",$course_id)->get();
    
   // $annee=$database_table;
    $show_upload=false;
    $show_table=true;
	//$course_name=$course_name;
	$annee=$year_grad;
	$id=$course_id;

	//$show_upload=false;
    $course1s = DB::table('Course1')->get();
$course2s = DB::table('Course2')->get();
$course3s = DB::table('Course3')->get();
$course4s = DB::table('Course4')->get();
$course5s = DB::table('Course5')->get();
    
      return view('examdisplay',
     ['course1s' => $course1s,
     'course2s' => $course2s,
     'course3s' => $course3s,
     'course4s' => $course4s,
     'course5s' => $course5s,
     'annee'=>$annee,
     'id'=>$id,
     'content'=>$this->content,
     'course_name' =>$name_of_course,
     'show_upload'=>$show_upload,
     'show_table'=>$show_table
     ]);
}


public function display_upload($year,$course_id){
	
	$show_upload=true;
	$show_table=false;
	$id=$course_id;
    $course1s = DB::table('Course1')->get();
$course2s = DB::table('Course2')->get();
$course3s = DB::table('Course3')->get();
$course4s = DB::table('Course4')->get();
$course5s = DB::table('Course5')->get();
    return view('examdisplay',
     ['course1s' => $course1s,
     'course2s' => $course2s,
     'course3s' => $course3s,
     'course4s' => $course4s,
     'course5s' => $course5s,
     'annee'=>$year,
     'id'=>$id,
     'course_name' =>$this->course_name,
     'show_upload'=>$show_upload

     ]);
}

public function upload(Request $request){
$validator = Validator::make($request->all(), [
        'course_id' => 'required|max:11',
        'date' 	=> 'required|max:255',
        'prof' 		=> 'required|max:255',
        'exam' 	=> 'required|max:255',
        
       
    ]);
if ($validator->fails()) {
     return redirect()->back()->withInput()->withErrors($validator);
        
    }
    else if(!Input::hasFile($request->file)){
    	return redirect()->back()->withInput()->withErrors("you must upload a file");
    }
else if (Input::hasFile($request->file))
{
    //
     //$date= date("Y-m-d");
	$date = date('Y-m-d H:i:s');
   $size = Input::file('files')->getSize();
	
$file_name = Input::file('files')->getClientOriginalName();
$type = Input::file('files')->getMimeType();

//$task = new Course1;
    $course_id = $request->course_id;
    $year_of_exam = $request->date;
    $prof = $request->prof;
    $examen = $request->exam;
    $date = date("Y-m-d");
	$database_table= $request->year;

	$desired_dir="user_data";
   
    DB::insert('insert into ' .$database_table.' ( course_id,annee, prof, examen ,date ,file, type, size) values  (:course_id,:annee,:prof,:examen,:date, :file, :type, :size)', 
    	array($course_id, $year_of_exam,$prof,$examen,$date,$file_name,$type,$size));
    //$task->save();

  
    	if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
          $destinationPath  ="$desired_dir/";
          

if(!file_exists(public_path('user_data/'.$file_name))){
                $mo= Input::file('files')->move($destinationPath, $file_name);
  }
 else{
 	$new_dir=time().$file_name;
                  $mo= Input::file('files')->move($destinationPath, $new_dir);
	
 }
          /*  if (file_exists(public_path('uploads/'.$file->getClientOriginalName()))) {
        return redirect()->back()->withInput()->withErrors([' File already exists.']);
    }*/
//}

	$course_name="";
	$annee=$request->year;
	$show_upload=false;
	$show_table=true;
	$id=$course_id;
    $course1s = DB::table('Course1')->get();
	$course2s = DB::table('Course2')->get();
	$course3s = DB::table('Course3')->get();
	$course4s = DB::table('Course4')->get();
	$course5s = DB::table('Course5')->get();
//annee1  
	$table=substr($database_table, 5,6);
	$table='Course'.$table;
	$course_name=DB::table($table)->select('course')->where( 'id',$course_id)->get();
	foreach ($course_name as $value) {
		$name_of_course=$value->course;
	}

	$content=DB::table($database_table)->where("course_id",$course_id)->get();

	Session::put('year_grad', $database_table);
	Session::put('course_name', $name_of_course);
	Session::put('course_id', $course_id);
	}
    return view('examdisplay',
     ['course1s' => $course1s,
     'course2s' => $course2s,
     'course3s' => $course3s,
     'course4s' => $course4s,
     'course5s' => $course5s,
     'annee'=>$annee,
     'id'=>$id,
     'content'=>$content,
     'course_name' =>$name_of_course,
     'show_upload'=>$show_upload,
     'show_table'=>$show_table
     ]);
}

public function download($filename){
	$file='user_data/'.$filename;


  
 
$headers=array(
    "pdf" => "application/pdf",
    "txt" => "text/plain",
    "html" => "text/html",
    "htm" => "text/html",
    "exe" => "application/octet-stream",
    "zip" => "application/zip",
    "doc" => "application/msword",
    "xls" => "application/vnd.ms-excel",
    "ppt" => "application/vnd.ms-powerpoint",
    "gif" => "image/gif",
    "png" => "image/png",
    "jpeg"=> "image/jpg",
    "jpg" =>  "image/jpg",
    "php" => "text/plain"
 );

return Response::download($file, $filename, $headers);
}
public function refresh_upload(){
	$year_grad=Session::get('year_grad');
$course_name=Session::get('course_name');
$course_id = Session::get('course_id');
	 return $this->display_table($year_grad,$course_name,$course_id);
   }
}
