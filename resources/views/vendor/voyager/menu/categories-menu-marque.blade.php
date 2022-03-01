@if(!isset($innerLoop))

<section id="produits-accordion" data-accordion-group>

    @endif



    @foreach ($items as $item)

    @php
    $originalItem = $item;
    $originalItem->setIdMarque($id_marque);
    @endphp



    @if(!$originalItem->parentId && !$originalItem->childrenMarque->isEmpty())

    <section data-accordion >

        <article data-control
            class="@if(!$originalItem->parentId){{'parent-accordion'}}@else{{'child-accordion'}}@endif">

            <label>

                <input type="checkbox" name="categories[]" value="{{ $item->id }}">

                <span class="cr">

                    <i class="cr-icon glyphicon glyphicon-ok"></i>

                </span>
                {{ $item->name }}
            </label>

        </article>

        <div data-content>

            @else

            <article>

                <label>

                    <input type="checkbox" name="categories[]" value="{{ $item->id }}">

                    <span class="cr">

                        <i class="cr-icon glyphicon glyphicon-ok"></i>

                    </span>

                    {{ $item->name }}

                </label>

            </article>

            @endif

            @if(!$originalItem->parentId && !$originalItem->childrenMarque->isEmpty())

            @include('voyager::menu.categories-menu-marque', ['items' => $originalItem->childrenMarque,'id_marque' =>
            $id_marque, 'innerLoop' => true])

            @endif

            @if(!$originalItem->parentId && !$originalItem->childrenMarque->isEmpty())

        </div>

    </section>

    @endif

    @endforeach

    @if(!isset($innerLoop))

</section>

@endif
