<!-- Références -->
@php
$references = getReferences();
@endphp
@if($references != null)
<section id="clients">
    <div class="swiper-container swiper-clients container">
        <div class="swiper-wrapper">
            @foreach($references as $reference)
                <div class="swiper-slide">
                    <img src="@if($reference->image) {{ asset('storage/'.$reference->image) }} @else {{ 'https://via.placeholder.com/400x300?text=reference' }} @endif" width="160px" alt="{{ $reference->name }}">
                </div>
            @endforeach
        </div>
    </div>

</section>
@endif
<!-- End Références -->
