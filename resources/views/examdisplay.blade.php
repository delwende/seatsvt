	@extends('nav')

@section('content')
  <div class="courses_box1">
	   <div class="container">
	   	 <div id="ulpoad">
  <!--<a href="">telecharger</a>
<span>|</span>-->

 
<a href="{{ url('/year'.$annee.'id'.$id)}}">upload</a>


<!--<a href="">telecharger zip archive</a>
<span>|</span>-->
    
  </div>

		<div class="col-md-9">
  @include('errors')
   @if(!empty($course_name) )

     <h2> {{$course_name}}</h2>
    <div class="panel-body">
    
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Annee</th>
                                            <th>Nom du prof</th>
                                            <th>Type d'examen</th>
                                            <th>Nom du fichier</th>
                                             <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   @if (!empty($content))
                                  @foreach ($content as $value)
                                      <tr>
                                      
                                            <td>{{$value->annee}}</td>
                                            <td>{{$value->prof}}</td>
                                            <td>{{$value->examen}}</td>
                                          
                                             <td><a href="{{ url('/download&filename='.$value->file)}}">{{$value->file}}</a></td>
                                            <td>{{$value->date}}</td>
                                        </tr>
                                    {{ csrf_field() }}
                                  @endforeach
                                  @endif
                 
                                       
                                    </tbody>
                                </table>


                            </div>
                           @endif
  @if($show_upload)
  <div class="col-md-6 admission_right">
             
              <form   action="{{url('/upload')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="date" id="slider-name" placeholder="ANNEE ex:2014" type="text" required="">
               </div>
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="prof" id="slider-name" placeholder="Nom du professeur: " type="text" required="">
               </div>
               <div class="form-group col-md-12 form-group1">
                <label class="col-md-7 control-lable" for="exam">type d'examen:  </label>
                <div class="col-md-5">
                    <div class="radios">
                <label for="radio-01" class="label_radio">
                   <input type="radio" name="exam" value="exam" />exam
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="exam" value="devoir" />devoir
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="exam" value="TD" />TD
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="exam" value="QUIZ" />QUIZ
                </label>
                  </div>
                </div>
                 <input class="form-control has-dark-background" name="course_id" id="slider-name" placeholder="nom du cour" type="hidden" value={{$id}}>
            
               <input class="form-control has-dark-background" name="year" id="slider-name" placeholder="nom du cour" type="hidden" value={{$annee}}>
            
              
                <div class="form-field">
         <div class="col-md-7 photo"><label>fichier <em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
         <div class="col-md-5"><input type="file" name="files" /></div>
         <div class="clearfix"> </div>
             </div>
                <div class="clearfix"> </div>
             </div>
              <input type="submit" value="submit" name="upload"class="course-submit">                               
             </form>  
             <!-- Modal HTML embedded directly into document -->
  

<!-- <h3>ajouter</h3>
            <form  method="POST" action="" >
               <div class="input-group input-group1">
                 
                <input class="form-control has-dark-background" name="course" id="slider-name" placeholder="nom du cour" type="text" required="" value="">
              <input class="form-control has-dark-background" name="Sn" id="slider-name" placeholder="nom du cour" type="hidden" value=>
            
              
               </div>

              <input type="submit" value="submit" class="course-submit" name="add">                               
             </form>  -->
  </div> 
  @endif
         </div>
  
       </div>
   
		    </div>

		    <div class="clearfix"> </div>
	   </div>
@endsection