@extends('layout.main')
@section('content')
<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to My Medicine
                </strong>
            </h2>
            <br>
             <br>
              <br>
            <a href="{{url('/medicines')}}"><button class="button large">Check out Some Medicine</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            My Medicine Latest Medicine Entries
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">
            @forelse($medicines->chunk(8) as $chunk)
            @foreach($chunk as $medicine)
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
                @endforeach
                @empty
                <h3>No more medicine</h3>
            @endforelse
        </div>
        <!-- Footer -->
        <br>
@endsection