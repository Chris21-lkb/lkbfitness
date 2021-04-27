@extends('layouts.default')
@section('content')
<div class="sectionContainer">
    <div class="whatwedo">
        <h2>WHAT WE DO</h2>
        @foreach($data as $data)
        <p>{{$data['content']}}</p>
        @endforeach
    </div>
    <div class="learnmore">
        @foreach($data2 as $data2)
        <div class="learnmore-info">
            <img src="{{ asset('/storage/learnmoreimages/' .$data2['file_path'])}}" alt="Image">
            <div class="learnmore-content">
                <h1>{{ $data2['title']}}</h1>
                <p>{{ $data2['content']}}</p>
            </div>
            <div class="learnmore-info-link">
                <a href="#">LEARN MORE</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="service">
        <h1><span style='color: lightsalmon;'>LKB</span>FITNESS SERVICES</h1>
        <div class="services">
        @foreach($data3 as $data3)
            <div class="services-content">
                <p>{{ $data3['content1']}}</p>
                <p>{{ $data3['content2']}}</p>

                <div class="serviceslink">
                    <a href="{{url('about')}}">READ MORE</a>
                </div>
            </div>
            <div class="services-img">
                <img src="{{ asset('/storage/servicefile/' .$data3['file_path'])}}" alt="Image">
            </div>
        @endforeach
        </div>
    </div>
</div>
@stop