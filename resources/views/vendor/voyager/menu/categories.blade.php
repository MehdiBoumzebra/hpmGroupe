@foreach ($items as $item)

    @php
        $originalItem = $item;
    @endphp

    <div style="padding-left: 15px;">
        <input style="vertical-align: sub;" type="checkbox" id="checkbox-category-{{ $item->id }}" value="{{ $item->id }}" name="categories[]" class="filled-in chk-col-orange" @if(in_array($item->id, $options)) checked @endif />
        <label style="@if(!$originalItem->parentId) {{ 'font-weight: bold; font-size: 12px; text-transform: uppercase;' }} @endif" for="checkbox-category-{{ $item->id }}">{{ $item->name }}</label>
        @if(!$originalItem->children->isEmpty())
            @include('voyager::menu.categories', ['items' => $originalItem->children])
        @endif
    </div>
@endforeach