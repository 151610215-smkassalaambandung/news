@extends('layouts.master')
@section('content')
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->

   
    <!-- main content -->
    <div id="homepage"> 
      <!-- Introduction -->
      <!-- / Introduction --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
      <section id="services" class="clear">
        <div class="col-md-12">
       @foreach($berita as $data)
        <article class="one_third">
          <figure><img src="{{asset('img/'.$data->cover)}}" style="width: 270px; height: 130px;" alt="">
            <figcaption>
              <h2>{{$data->judul}}</h2>
              <p>{!!str_limit($data->isi_berita,100)!!} <a></a>.</p>
              <footer class="more"><a href="{{url('/selengkapnya',$data->id)}}">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        @endforeach
        </div>
      </section>
      <!-- / Services --> 
    </div>
    <!-- / content body --> 
  </div>
</div>
@endsection