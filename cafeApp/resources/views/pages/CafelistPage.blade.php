@extends('layouts.main')

@section('content')
    لیست کافه ها
    
    <div class="row">
        @foreach ($cafe_list as $cafe)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Cafe Id: {{$cafe['id']}}</h4>
                        <h4 class="card-title">{{$cafe['name']}}</h4>
                        <h5 class="card-text">{{$cafe['provance']}}|{{$cafe['city']}}</h5>
                        <a href={{route('cafes.show', ['cafe' => $cafe['id']])}} class="btn btn-primary">صفحه کافه</a>
                    </div>
                    </div> 
            </div>                    
        @endforeach

    </div>
@endsection