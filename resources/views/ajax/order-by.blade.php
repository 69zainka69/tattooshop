@foreach ($tovars as $product)
@php
$image ='';
if (count($product->images) > 0 ){
$image = $product->images[0]['img'];
} else {
$image = '/img/no_image.png';
}
@endphp
<div class="col">
    <div class="card shadow-sm" style="text-align:center;">
        <img style="margin-left:auto; margin-right:auto;" alt="{{$product->title}}" src="{{$image}}" width="200" height="200">

        <div class="card-body details_name" data-id="{{$product->id}}">
            <p class="card-text">{{$product->title}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('showProduct', [$product->category['url_cat'],$product->url])}}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                    <a data-id="{{$product->id}}" class="btn btn-sm btn-outline-secondary cart_button">В корзину</a>
                </div>
                <p>
                    @php echo $product->price($_COOKIE['currency'] ?? 'UAH')->price_shop; @endphp
                                       
                                        <span>
                                            @if (!isset($_COOKIE['currency']))
                                            ГРН
                                            @elseif (($_COOKIE['currency']) == "USD")
                                            USD
                                             @elseif (($_COOKIE['currency']) == "EUR")
                                            EUR
                                            @elseif (($_COOKIE['currency']) == "PLN")
                                            PLN
                                            @else
                                            грн
                                            @endif
                    </span></p>

            </div>
        </div>
    </div>
</div>
@endforeach
