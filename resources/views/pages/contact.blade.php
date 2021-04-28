@extends('layouts.default1')
@section('content')
<div class="contactheadercontent">
@foreach($data as $data1)
<h1>{{ $data1['pagetitle']}}</h1>
<p>{{ $data1['introduction']}}</p>
@endforeach
</div>
<div class="contactcontainer">
    <div class="contactform">

    </div>
    <div class="contactdata">
        
    </div>
</div>
@stop