@extends('layouts.app')

@section('content')

    <section>

        <div class="container">

            <div class="row g-3">

                @foreach ($cards as $card)
                    
            

                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        @include('partials.product-card')

                    </div>

                @endforeach

            </div>

        </div>
    
    </section> 

@endsection