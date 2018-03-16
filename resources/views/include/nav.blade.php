<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="/">Kabar Berita</a></h1>
      <h2>infomasi berita terkini</h2>
    </div>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>
    <nav class="clear">
      <ul>
        <li class="active"><a href="/">Home</a></li>
        @php
          $kategori = App\Kategori::all();
          @endphp
          @foreach($kategori as $data)
          <li><a href="{{url('/berita',$data->id)}}">{{$data->name}}</a></li>    
        @endforeach
      </ul>
    </nav>
  </header>
</div>