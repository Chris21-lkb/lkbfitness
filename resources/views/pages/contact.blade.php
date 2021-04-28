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
        <h1> CONTACT US</h1>
        <form method="post" action="usermessage">
        @csrf
            <label>NAME</label><br>
            <input type="text" name="firstname" placeholder="FIRST" required>
            <input type="text" name="lastname" placeholder="LAST" required><br>
            <label>PHONE NUMBER</label><br>
            <input type="tel" name="telephone" required><br>
            <label>EMAIL</label><br>
            <input type="email" name="email" required><br>
            <label>WHAT CAN I HELP YOU WITH ?</label><br>
            <textarea name="message"></textarea><BR>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
    <div class="contactdata1">
    @foreach($data as $data)
        <div class="contactdata1-address">
            <h1>ADDRESS</h1>
            <p>{{ $data['address']}}</p>
        </div>
        <div class="contactdata2">
            <div class="contactdata2-data">
                <h1>TELEPHONE</h1>
                <p>{{ $data['telephone']}}</p>
            </div>
            <div class="contactdata2-data">
                <h1>EMAIL</h1>
                <p>{{ $data['email']}}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>
@stop