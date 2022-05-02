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
    
    
    
    <div class="container-lg">
        <div class="row">
            <div class="col-3">
                کیفیت خدمات
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                موسیقی
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                قیمت
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                نحوه برخورد
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                راحتی
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                طراحی محیط
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                بهداشت
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                سرعت سرویس دهی
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                تنوع منو
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-2">
                دسترسی
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
    </div>
    
    <div>
        امکانات کافه
    </div>


    <div>
        فرم ارسال نظر
    </div>
    
    <!-- rating.js file -->
    <script src={{asset('/js/rating.js')}}></script>
    
    
@endsection