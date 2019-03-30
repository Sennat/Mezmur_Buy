@extends('pages.layouts.template')

@section('content');
    <div class="page-header" style="margin-top: 30px">
          <h3 class="text-left text-success">{{ $page_title }}</h3>
          <hr class="text-success">
    </div>
    <div class="panel panel-success" style="min-height: 600px">
          <div class="panel-heading">
               <nav class="nav text-primary font-weight-bold">
                    <a class="nav-link active" href="#">Artist</a>
                    <a class="nav-link" href="#">Album</a>
                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Genre</a>
                         <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">MP3</a>
                              <a class="dropdown-item" href="#">WMA</a>
                              <a class="dropdown-item" href="#">M4A</a>
                         </div>
                    </li>
                    <a class="nav-link" href="#">Popularity</a>
               </nav>
          </div>
          <div class="panel-body">Panel Content</div>
     </div>
@endsection