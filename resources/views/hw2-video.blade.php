@extends('layout1')
@section('title', 'Video')
@section('script')
<script src='{{ URL::to("hw2-video.js") }}' defer></script>
<script>
  const VIMEO = "{{ URL::to('video/search_video') }}";
</script>
@stop
@section('content')
     </br>
     <iframe id="player" width="560" height="315" src="https://www.youtube.com/embed/fQTu3gr13B4?controls=0" title="presentazione" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
     </br>
     <button>Guarda anche altri video</button>
    <div id = "preview">	
    </div>
@stop
