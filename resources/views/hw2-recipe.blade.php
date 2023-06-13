@extends('layout1')
@section('title', 'Ricette')
@section('script')
<script src='{{ URL::to("hw2-recipe.js") }}' defer></script>
<script>
  const CHECK_RICETTE = "{{ URL::to('recipe/search_recipe') }}";
</script>
@stop
@section('content')

        <h4>Le nostre arance possono essere usate in varie ricette.</br>
        Cercala specificandone la tipologia
        </h4>
	<form name="search_content" id="food">
        <label>Cerca le ricette:</label>
            <input type='text' name='search' id='content'>	
	    <input type='submit' value='cerca'>
        </form>
	<div id='recipe'></div>
        <div id='erore' class='hidden'> 
        <img src='{{ URL::to("IMG/sob.gif") }}'/></br>
      Non sono state trovate ricette inerenti </br> prova con un altra tipologia
  </div>
@stop