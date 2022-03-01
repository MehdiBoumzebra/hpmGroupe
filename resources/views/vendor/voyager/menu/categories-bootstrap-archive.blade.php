@if(!isset($innerLoop))
<ul class="nav navbar-nav navbar-nav-right custom-picker">
    <li class="js_nav-item nav-item dropdown">
        <a href="#" class="btn dropdown-toggle nav-item-child nav-item-hover" data-toggle="dropdown"
            data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">Présentation<span
                class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li class="js_nav-item nav-item"><a class="nav-item-child-dropdown" href="{{ route('qui-somme-nous') }}">qui sommes nous?</a>
            </li>
            <li class="js_nav-item nav-item"><a class="nav-item-child-dropdown"
                    href="{{ route('qualite') }}">qualité</a>
            </li>
            <li class="js_nav-item nav-item"><a class="nav-item-child-dropdown"
                    href="{{ route('services') }}">services</a>
            </li>
        </ul>
    </li>
    @else
    <ul class="dropdown-menu @if(isset($item) && $item->slug == 'aire-de-jeux' ) produits-menu @endif" role="menu">
        @endif
        @foreach ($items as $item)
        @php
        $originalItem = $item;
        $listItemClass = null;
        $linkAttributes = null;
        $href = '#';
        $caret = null;

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
        $linkAttributes = 'class="btn dropdown-toggle nav-item-child nav-item-hover" data-hover="dropdown"
        data-animations="zoomIn zoomIn zoomIn zoomIn" aria-expanded="false"';
        $caret = '<span class="caret" data-toggle="dropdown"></span>';
        $listItemClass = 'dropdown';
        } else {
        $linkAttributes = 'class="nav-item-child nav-item-hover"';
        $href = '#';
        }
        @endphp
        @if(!isset($innerLoop))
        <li class="js_nav-item nav-item dropdown">
            <a href="@if(strtolower($item->name) == 'aire de jeux'){{route('aire-de-jeux')}}@else#@endif" class="btn dropdown-toggle nav-item-child nav-item-hover" data-toggle="@if(strtolower($item->name) == 'aire de jeux'){{''}}@else{{'dropdown'}}@endif"
                data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">
                {{ $item->name }}
                {!! $caret !!}
            </a>
            @if(!$originalItem->children->isEmpty())
            @include('voyager::menu.categories-bootstrap-archive', ['items' => $originalItem->children, 'innerLoop' =>
            true, 'static' => false])
            @endif
        </li>
        @else
        <li class="js_nav-item nav-item {{ $listItemClass }}">
            <a href="@if($originalItem->children->isEmpty()){{ route('produits.category', $originalItem->slug) }}@endif"
                class="nav-item-child-dropdowns nav-item-child-dropdown">
                {{ $item->name }}
            </a>
            @if(!$originalItem->children->isEmpty())
            <ul class="menu-dro">
                @foreach($originalItem->children as $child)
                <li><a href="{{ route('produits.category', $child->slug) }}">{{ $child->name }}</a>
                <li>
                    @endforeach
            </ul>
            @endif
        </li>
        @endif
        @endforeach
        @if($static)
        <li class="js_nav-item nav-item">
            <a class="nav-item-child nav-item-hover" href="{{ route('references') }}">Références</a>
        </li>
        <li class="js_nav-item nav-item">
            <a class="nav-item-child nav-item-hover" href="{{ route('contact') }}">Contact</a>
        </li>
        @endif
    </ul>
