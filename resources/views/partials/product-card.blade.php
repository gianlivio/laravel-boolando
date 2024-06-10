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
        
        <ul>
            @foreach (array_reverse($card['badges']) as $badge)

                <li class="{{ $badge['type'] === 'tag' ? 'bg-success' : 'bg-danger' }}">

                    {{ $badge['value']}} 

                </li>

            @endforeach
        </ul>

        <p>
            {{ $card['brand'] }}
        </p>

        <p>
            {{ $card['price']}}
        </p>


    </div>


</div>