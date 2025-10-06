@if(!empty(request()->get('menu')))
<div class="accordion" id="accordionExample">
    @php
    $pages = \App\Models\Page::get(['id', 'title', 'slug'])->map(function($page){
        return [
        'url' => '/page/detail/'.$page->slug,
        'icon' => '',
        'label' => $page->title,
        ];
    });
    @endphp
    @include('nguyendachuy-menu::accordions.default', [
    'name' => 'Pages',
    'urls' => $pages,
    'show' => true
    ])

    @php
    $categories = \App\Models\Postcategory::get(['id', 'title', 'slug'])->map(function($postcategory){
        return [
        'url' => '/berita/kategori/'.$postcategory->slug,
        'icon' => '',
        'label' => $postcategory->title,
        ];
    });
    @endphp

    @include('nguyendachuy-menu::accordions.default', [
    'name' => 'Categories',
    'urls' => $categories,
    ])

    @include('nguyendachuy-menu::accordions.add-link', ['name' => 'Custom Link'])

</div>
@endif
