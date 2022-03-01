@if(!isset($innerLoop))

<ul class="nav navbar-nav navbar-nav-right custom-picker">

@else

<ul class="dropdown-menu @if(isset($float) && $float) {{ 'float' }} @endif" role="menu">

@endif



@foreach ($items as $item)



    @php



        $originalItem = $item;



        $listItemClass = null;

        $linkAttributes =  null;

        $href = '#';

        $caret = null;

        $float = false;



        // With Children Attributes

        if(!$originalItem->children->isEmpty()) {
            $href =  route('child.categories', $item->slug);
        } else {
            $href =  route('produits.category', $item->slug);
        }

    @endphp

    <li class="js_nav-item nav-item">
        <a class="nav-item-child nav-item-hover" href="{{ $href }}">{{ $item->name }}</a>
    </li>

@endforeach

@if($static)

    <li class="js_nav-item nav-item">
        <a class="nav-item-child nav-item-hover" href="{{ route('marques') }}">Marques</a>
    </li>
    <li class="js_nav-item nav-item text-center">
        <a href="#" class="nav-item-child nav-item-hover social-media visible-xs-inline-block"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#" class="nav-item-child nav-item-hover social-media visible-xs-inline-block"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <a href="#" class="nav-item-child nav-item-hover social-media visible-xs-inline-block"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a data-selector=".header" class="search-toggle nav-item-child nav-item-hover social-media visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-search" aria-hidden="true"></i></a>
    </li>
@endif

</ul>

