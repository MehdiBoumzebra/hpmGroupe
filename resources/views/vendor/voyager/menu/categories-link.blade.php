@if(!isset($innerLoop))
<section id="produits-accordion" data-accordion-group>
    @endif

    @foreach ($items as $item)
    @php
    $originalItem = $item;
    @endphp

    @if(!$originalItem->children->isEmpty())
    <section data-accordion>
        <article data-control data-slug="{{$item->slug}}" class="@if(!$originalItem->parentId){{'parent-accordion'}}@else{{'child-accordion'}}@endif">
                {{ $item->name }}
        </article>
        <div data-content>
            @else
            <article data-slug="{{ $item->slug }}" class="wrap_category">
                <a href="{{ route('produits.category', $item->slug) }}">
                    {{ $item->name }}
                </a>
            </article>
            @endif

            @if(!$originalItem->children->isEmpty())
            @include('voyager::menu.categories-link', ['items' => $originalItem->children, 'innerLoop' => true])
            @endif

            @if(!$originalItem->children->isEmpty())
        </div>
    </section>
    @endif
    @endforeach
    @if(!isset($innerLoop))
</section>
@endif
