@extends('layout.main')
@section('title', 'Medicines')
@section('content')
 <!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row">
            @forelse($medicines as $medicine)
           <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href = "{{route('cart.addItem', $medicine->id)}}"class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images', $medicine->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('medicine')}}">
                        <h3>
                            {{$medicine->name}}
                        </h3>
                    </a>
                    <h5>
                        KSH.{{$medicine->price}}
                    </h5>
                    <p>
                        {{$medicine->description}}
                    </p>
                </div>
                </div>
                @empty
                <h3>No more medicine</h3>
            @endforelse
        </div>
        @endsection