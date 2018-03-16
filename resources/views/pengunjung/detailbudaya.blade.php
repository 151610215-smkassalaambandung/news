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
      <section id="services" class="last clear">
        <article class="last clear">
          <figure><img src="{{asset('img/'.$budaya->cover)}}" width="900" height="420" alt="">
            <figcaption>
              <h4>{{$budaya->judul}}</h4>
              <p>{!! $budaya->isi_berita !!}</p>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Services --> 
    </div>
    <!-- / content body --> 
  </div>
</div>
@endsection