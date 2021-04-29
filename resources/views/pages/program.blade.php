@extends('layouts.default1')
@section('content')
<div class="programheadercontent">
@foreach($dataa as $dataa)
<h1>{{ $dataa['pagetitle']}}</h1>
<p>{{ $dataa['introduction']}}</p>
@endforeach
</div>
<div class="programcontent">
    <div class="programcontentdata">
    @foreach($data as $data)
        <div class="programcontentdata-data">
            <img src="{{ asset('/storage/programfile/' .$data['programpicture'])}}" alt="Image"> 
            <h3>{{ $data['name']}}</h3> 
            <h1>{{ $data['price']}}</h1> 
            <h4>{{ $data['programintro']}}</h4>
            <p>{{ $data['programmotivation']}}</p>
            <p>{{ $data['programdata']}}</p>
            <div class="learnmore-info-link">
                <a href="{{url('contact')}}">LEARN MORE</a>
            </div>
        </div>  
    @endforeach
    </div>
</div>
@stop