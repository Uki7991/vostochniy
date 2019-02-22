<div class="col-12 col-sm-12 col-md-6 col-lg-3 my-1 my-md-2">
    <div class="card shadow-sm border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-dark text-white">
        <div class="card-body p-2 text-center">
            <img src="{{ asset('uploads/'.$product->image) }}" class="img-fluid mb-1 mb-md-3 image_of_product" alt="">
            <p class="h4 title_of_product text-capitalize {{ $product->description ? '' : 'mb-3' }}">{{ $product->name }}</p>

            @if($product->description)
                <p class="description_of_product small">{{ $product->description }}</p>
            @endif
            <div class="d-flex align-items-end justify-content-around">
                <p>Цена:</p>
                <p><span class="h4 font-weight-bold text-danger">{{ $product->price }}</span> сом</p>
            </div>
        </div>
    </div>
</div>