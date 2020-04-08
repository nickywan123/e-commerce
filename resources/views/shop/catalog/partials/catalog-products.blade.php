@if($products->count() > 0)
<!-- Products -->
<div class="row no-gutters">
    @foreach($products as $key => $product)
    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
        <div class="box">
            <div class="ribbon"><span>{{ $product->quality->name }}</span></div>
            <div class="tooltip-container">
                <a style="text-decoration: none; color: #212529;" href="javascript:void()" data-toggle="modal" data-target="#modal-{{ $product->id }}">
                    <div class="animated-product-container">
                        <div class="animated-product-image-container">
                            <img src="{{ asset('storage/' . $product->images[0]->path . '/' . $product->images[0]->filename) }}" alt="{{ $product->name }}">
                        </div>

                        <div class="animated-product-information-container">
                            <p class="product-name">{{ $product->name }}</p>
                            <div>
                                <ul class="list-unstyled product-rating mb-1">
                                    <li>
                                        <i class="fa fa-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star checked"></i>
                                    </li>
                                </ul>
                                <p class="mb-1">120 ratings</p>
                            </div>
                        </div>
                    </div>

                    <!-- Changing position of tooltip based on whether column is on the right or left -->
                    <?php
                    $i = 1;
                    $key1 = 3;
                    $key2 = 4;
                    $key3 = 5;
                    $tooltipClass = 'right';

                    if (
                        $key == $key1 ||
                        $key == $key2 ||
                        $key == $key3 ||
                        $key == $key1 * $i ||
                        $key == $key2 * $i ||
                        $key == $key3 * $i
                    ) {
                        $tooltipClass = 'left';
                    }
                    ?>

                    <div class="{{ $tooltipClass }} overflow-auto" style="height: 400px">
                        <div class="text-content">
                            <h6 class="font-weight-bold" style="color: #ffffff;">Panels Selling - {{ $product->name }} </h6>
                            <div class="row">
                                <div class="col-12">
                                    @foreach($product->productSoldByPanels as $productSoldByPanel)
                                    <a href="" style="text-decoration: none; color: #212529;">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="text-dark">{{ $productSoldByPanel->panel->company_name }}</h5>
                                                <h6 class="text-dark font-weight-bold">{{ $productSoldByPanel->getDecimalPrice() }}</h6>
                                                <p class="mb-0 text-dark">Panel Rating</p>
                                                <ul class="list-unstyled product-rating mb-1">
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-0 text-dark">Rating by Customers</p>
                                                <ul class="list-unstyled product-rating mb-1">
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star checked"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-0 text-dark">Area of Service</p>
                                                <p class="mb-1 text-dark font-weight-bold">
                                                    Kl, Seremban
                                                </p>
                                                <p class="mb-0 text-dark">Commitment</p>
                                                <p class="mb-0 text-dark" style="font-size: 0.8rem;">
                                                    {{ $productSoldByPanel->panel_promotion }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<!-- No product found message -->
<div class="row">
    <div class="col-12">
        <p class="no-product-found-message">We're sorry, there's no available product under this category yet.</p>
    </div>
</div>
@endif