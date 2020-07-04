@extends('template.master')

@section('content')
<div>
    <h2> {{$quest->quest_title}}</h2>
    <p style="color:grey; top:0; font-size:12px"> 
        Date created: {{$quest->created_at}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Date modified: {{$quest->updated_at}}<br>
    </p>
    <div><?php echo $quest->quest_content; ?></div>
    <p style="font-size:1px"><br></p> 
    <a href="../jawaban/{{$quest->id}}#jawaban" class="btn btn-primary bg-success">Jawaban</a>
    <a href="../pertanyaan/{{$quest->id}}/edit" class="btn btn-primary bg-warning">edit</a>
    <form action="../pertanyaan/{{$quest->id}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary bg-danger"><i class="fas fa-trash"></i></button>
    </form>    
</div>
    


@endsection