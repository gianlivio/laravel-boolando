<div class="ms_card h-100">

    {{-- immagine --}}

    <img src="{{ Vite::asset("resources/img/".$card["frontImage"]) }}"" alt="">

    {{-- icona cuore preferiti --}}

    <div class="">

        <i class="fa fa-heart{{ $card['isInFavorites'] }}"></i>

    </div>
    
    

    <div class="ms_card-body">

        <p>
            {{ $card['name']}}
        </p>

        <p>
            {{ $card['brand'] }}
        </p>

        <p>
            {{ $card['price']}}
        </p>


    </div>


</div>