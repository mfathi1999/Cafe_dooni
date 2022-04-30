@extends('layouts.main')


@section('content')

    <h1>{{$cafe['name']}}</h1>
    
    <h6>{{$cafe['provance']}}|{{$cafe['city']}}</h6>

    <div>
        <img src={{asset('/img/sample.jpg')}} class="img-fluid" alt="cafe cover image">
    </div>
    
    <div class="container-lg">
        <h3>ایمیل: {{$cafe['email_address']}}</h3>
        <h3>
            تلفن:
            <a href="tel:{{$cafe['phone_number']}}">{{$cafe['phone_number']}}</a>
        </h3>
        <h3>
            آدرس:
            {{$cafe['address']}}
        </h3>
    </div>
    
    <div class="container-sm">
        <div class="ratio ratio-4x3">
            <iframe src={{$cafe['map_src_google_map']}} width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
    
    
    <div class="container">
        <span id="rateMe1"></span>
    </div>
    
    <div>
        امکانات کافه
    </div>
    
    <!-- rating.js file -->
    <script src={{asset('/js/rating.js')}}></script>
    
    
@endsection