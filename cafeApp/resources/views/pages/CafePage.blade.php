@extends('layouts.main')


@section('content')

    <div class="container-md">
        <h1>{{$cafe['name']}}</h1>
        
        <h6>{{$cafe['provance']}}|{{$cafe['city']}}</h6>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <img src={{asset('/img/sample.jpg')}} class="img-fluid" alt="cafe cover image">
            </div>
            <div class="col-lg-3 border border-dark">
                
                <ul class="list-group list-group-flush">
                    ویژگی ها
                    @foreach (array_keys($cafe['attributes']) as $attribute)
                        <li class="list-group-item">
                            {{$attribute}} : {{$cafe['attributes'][$attribute]}}
                        </li>           
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="container-lg">
        <h3 >اطلاعات تماس</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                ایمیل:
                <a href="mailto:{{$cafe['email_address']}}">{{$cafe['email_address']}}</a>
            </li>
            <li class="list-group-item">
                تلفن:
                <a href="tel:{{$cafe['phone_number']}}">{{$cafe['phone_number']}}</a>
            </li>
            <li class="list-group-item">
                آدرس:
                {{$cafe['address']}}
            </li>
        </ul>
    </div>
    <br>
    <div class="container-lg">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="ratio ratio-4x3" style="--bs-aspect-ratio: 50%;">
                    <iframe src={{$cafe['map_src_google_map']}} style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <br>
    
    
    
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
            <div class="col-3">
                تنوع منو
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <div class="col-3">
                دسترسی
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
    </div>
    <br>


    <div class="container" >
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">آدرس ایمیل</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">نظر شما</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <!-- rating.js file -->
    <script src={{asset('/js/rating.js')}}></script>
    
    
@endsection