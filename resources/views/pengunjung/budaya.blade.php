@extends('layouts.master')
@section('content')
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->
   
    <!-- main content -->
    <div id="homepage"> 
      <!-- Introduction -->
      <!-- / Introduction --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
      <section id="services" class="last clear">
       @foreach($budaya as $data)
        <article class="one_third">
          <figure><img src="{{asset('img/'.$data->cover)}}" style="width: 250px; height: 120px;" alt="">
            <figcaption>
              <h4>{{$data->judul}}</h4>
              <p>{!!str_limit($data->isi_berita,100)!!}</p>
              <footer class="st--button"><a href="{{url('/selengkapnya',$data->id)}}">Read More >><i class="zmdi zmdi-long-arrow-right"></i></a></footer>
            </figcaption>
          </figure>
        </article>
        @endforeach
      </section>
      <!-- / Services --> 
    </div>
  </div>
</div>
@endsection
