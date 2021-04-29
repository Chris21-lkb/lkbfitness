@extends('layouts.default1')
@section('content')
<div class="galleryheadercontent">
@foreach($data1 as $data1)
<h1>{{ $data1['pagetitle']}}</h1>
@endforeach
</div>
<div class="gallerycontainer">
    <div class="gallerycontainercontent">
        @foreach($data as $data)
        <div class="gallerycontainercontent-img">
            <img src="{{ asset('/storage/galleryfile/' .$data['file_path'])}}" alt="Image">    
        </div>
        @endforeach
    </div>
</div>
@stop