@extends('layouts.app')

@section('nav')

<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"action="annee1">1ere annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <!-- First menu with submenu from database-->
              @if (count($course1s) > 0)
               @foreach ($course1s as $course1)
              
                   <li><a href="{{ url('/year_grad1annee1'.''.$course1->id)}}">{{ $course1->course }}</a>

                    </li>
                  {{ csrf_field() }}
                @endforeach
               @endif
                
                
                 <li><a href="">Ajouter un titre</a></li>      
                 </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee2">2eme annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <!-- second menu with submenu from database-->
                 @if (count($course2s) > 0)
               @foreach ($course2s as $course2)
                   <li><a href="{{url('/year_grad1annee2'.''.$course2->id) }}">{{ $course2->course }}</a>
               </li>
                  {{ csrf_field() }}
                @endforeach
               @endif
                
             
                <li><a href="">Ajouter un titre</a></li>    
          
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee3">3eme annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                 <!-- 3rd menu with submenu from database-->
                 @if (count($course3s) > 0)
               @foreach ($course3s as $course3)
                   <li><a href="{{url('/year_grad1annee3'.''.$course3->id)}}">{{ $course3->course }}</a>
               </li>
                  {{ csrf_field() }}
                @endforeach
               @endif
                
           
                <!--<li><a href="">Ajouter un titre</a></li>  -->
              </ul>
            </li>
             <li class="dropdown">
              <!-- Master courses menu with submenu from database-->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <!-- 3rd menu with submenu from database-->
                 @if (count($course4s) > 0)
               @foreach ($course4s as $course4)
                   <li><a href="{{ url('/annnee4='.$course4->id)}}">{{ $course4->course }}</a>
               </li>
                  {{ csrf_field() }}
                @endforeach
               @endif
                
             
               <!-- <li><a href="">Ajouter un titre</a></li>  -->
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctorat<span class="caret"></span></a>
              <!--<ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>-->
            </li>
        </ul>
      </div><!-- /.navbar-collapse -->

   </div>

</nav>

@endsection