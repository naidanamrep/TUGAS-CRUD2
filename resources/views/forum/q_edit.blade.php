@extends('template.master')

@section('content')
<div class="ml-3 mr-3">
<form action="/pertanyaan/{{$quest->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="quest">Judul Pertanyaan</label>
            <input type="text" class="form-control" name="quest_title" value="{{$quest->quest_title}}" placeholder="Buat judul pertanyaan" id="quest_title">
            <label for="quest">Isi Pertanyaan</label>
            <textarea type="text" class="form-control" name="quest_content" placeholder="Buat isi pertanyaan" id="quest_content">{{$quest->quest_content}}</textarea>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../../pertanyaan" class="btn btn-primary bg-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#quest_content').summernote();
    });
</script>
@endpush