@extends('layouts.default1')
@section('content')
<div class="aboutheadercontent">
@foreach($data as $data1)
<h1>{{ $data1['pagetitle']}}</h1>
<p>{{ $data1['introductionpage']}}</p>
@endforeach
</div>
<div class="aboutcontainer">
    <div class="aboutcontainerdata">
    @foreach($data as $data)
        <div class="aboutcontainerdata-img">
            <img src="{{ asset('/storage/aboutfile/' .$data['file_path'])}}" alt="Image">    
        </div>
        <div class="aboutcontainerdata-content">
            <h1>MEET {{ $data['name']}}</h1>
            <p>{{ $data['content']}}</p>
        </div>
        @endforeach
    </div>

    <div class="aboutcontainerdataKeys">
    <h1>PILLARS OF SUCCESS</h1>
        <div class="aboutcontainerdata1">
            <div class="aboutcontainerdata1-content">
            @foreach($dataa as $dataa)
                <div class="aboutcontainerdata1-content-data">
                    <h2>{{ $dataa['title']}}</h2>
                    <p>{{ $dataa['content']}}</p>
                </div>
            @endforeach
            </div>
            <div class="aboutcontainerdata1-content1">
            @foreach($dataaa as $dataaa)
                <img src="{{ asset('/storage/galleryfile/' .$dataaa['file_path'])}}" alt="Image">    
            @endforeach
            </div>
        </div>
    </div>
</div>
@stop