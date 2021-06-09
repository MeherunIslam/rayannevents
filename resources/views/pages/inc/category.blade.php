<div class="hero__categories">
    <div class="hero__categories__all">
        <i class="fa fa-bars"></i>
        <span>All Category</span>
    </div>
    @php
       $subcategoriess = App\Subcategory::where('status',1)->latest()->get();
    @endphp
    <ul>
        @foreach ($subcategoriess as $subcategory)
        <li><a href="{{ url('subcategory/product-show/'.$subcategory->id) }}">{{ $subcategory->subcategory_name }}</a></li>
        @endforeach
    </ul>
</div>
