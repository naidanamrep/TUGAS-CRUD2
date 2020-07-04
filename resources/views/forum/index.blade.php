@extends('template.master')

@section('content')
<h1>Forum Tanya-Jawab</h1>
@foreach($quests as $key => $quest)
    <h2><a href="../pertanyaan/{{$quest->id}}">{{$quest->quest_title}}</a></h2>
    <p> {{Str::limit(strip_tags($quest->quest_content),100, '......')}}</p>
    <p><br></p>

@endforeach

@endsection
<?php?>
