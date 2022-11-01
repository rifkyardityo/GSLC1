@extends("layout.main")

@section("container")
@foreach ($artikel as $artikel_i)
<article>
<h1>title : {{$artikel_i["title"]}}</h1>
@if ($artikel_i ["pembuat"]== "rifky")
<h5>punya {{ $artikel_i ["pembuat"] }}</h5>

@else
<h5>punya {{ $artikel_i ["pembuat"] }}</h5>

@endif
<h2>pembuat : {{$artikel_i["pembuat"]}}</h2>

<p><h4>isi : {{$artikel_i["isi"]}}</h4>
</p>
</article>

@endforeach
@endsection
