@extends('layout.main')
@section('title', 'medicine')
@section('content')
<!-- products listing -->
        <!-- Latest SHirts -->
         
        <div class="row">

            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="{{url('images', $medicine->image)}}"/>
                        </a>
                    </div>  
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">KSH.{{$medicine->price}}</span>{{$medicine->name}}
                    </h3>
                    <div class="row">
                    <p>
                        {{$medicine->description}}
                    </p>
                             <a href = "{{route('cart.addItem', $medicine->id)}}"class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        </div>
                    </div>
                     <br>
               
                </div>

            </div>
        </div>
    </div>
@endsection