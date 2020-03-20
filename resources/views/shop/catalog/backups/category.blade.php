@extends('layouts.shop.main')

@section('content')
<div>
    {{ Breadcrumbs::render('shop.category', $category) }}

    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-12 hidden-sm" style=" padding: 10px; right:33%; bottom: 20%; ">
                <!-- Related Categories -->
                <ul class="list-group border-right">
                    <li class="list-group-item">


                        <ul>
                            <strong>PRICE</strong>
                            <li>Under RM25 </li>
                            <li>RM 25 to RM 50 </li>
                            <li>RM50 to RM100 </li>
                            <li>RM100 to RM200 </li>
                            <li>RM200 & Above </li>

                            <input type="number" placeholder="Min" id="quantity" name="quantity" min="1" max="300">
                            <input type="number" placeholder="Max" id="quantity" name="quantity" min="1" max="300">
                        </ul> <br>

                        <ul>
                            <strong>COLOR</strong>
                            <li><input type="checkbox" id="white" name="white" value="white">
                                <label for="white">WHITE</label>
                            </li><br>
                            <li><input type="checkbox" id="beige" name="beige" value="beige">
                                <label for="beige">BEIGE</label>
                            </li><br>
                            <li><input type="checkbox" id="red" name="red" value="red">
                                <label for="red">RED</label>
                            </li><br>
                            <li><input type="checkbox" id="maroon" name="maroon" value="maroon">
                                <label for="beige">MAROON</label>
                            </li><br>
                            <li><input type="checkbox" id="grey" name="grey" value="grey">
                                <label for="grey">GREY</label>
                            </li><br>
                            <li><input type="checkbox" id="black" name="black" value="black">
                                <label for="black">BLACK</label>
                            </li><br>
                        </ul>

                        <ul>
                            <strong>RATINGS</strong>
                            <li>

                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>

                            </li>
                            <li>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                and up
                            </li>
                            <li>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                and up
                            </li>
                            <li>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                and up
                            </li>
                            <li>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                and up
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>

            <!-- Products -->
            <div class=" col-md-9 col-sm-12" style="right:30%;">
                <div class="pt-1">
                    <!-- Product cards -->
                    <div class="row">
                        <div class=" col-3">

                            <button class="btn btn-default round-background " type="button" id="menu1">
                                <img src="{{asset('images/pillow1.jpg')}}">
                            </button>
                            <hr>
                            <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it"><strong>[COMPANY NAME]</strong>
                            </span>
                            <span> Pillow,soft,50cm</span>
                            <h3><strong>RM20</strong></h3>
                            <ul>

                                <li class="ratings">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span>(60) </span>
                                </li>
                                <ul>

                        </div>
                        <div class="col-3">

                            <button class="btn btn-default round-background " type="button" id="menu1">
                                <img src="{{asset('images/pillow2.jpg')}}">
                            </button>
                            <hr>
                            <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it"> <strong>[COMPANY NAME]</strong> </span>
                            <span> Pillow,soft,50cm</span>
                            <h3><strong>RM30</strong></h3>
                            <ul>

                                <li class="ratings">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span>(40) </span>
                                </li>
                                <ul>

                        </div>
                        <div class=" col-3">

                            <button class="btn btn-default round-background " type="button" id="menu1">
                                <img src="{{asset('images/pillow3.jpg')}}">
                            </button>
                            <hr>
                            <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it"> <strong>[COMPANY NAME]</strong> </span>

                            <span> Pillow,soft,50cm</span>
                            <h3><strong>RM10</strong></h3>
                            <ul>

                                <li class="ratings">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span>(20) </span>
                                </li>
                                <ul>
                        </div>


                        <div class=" col-3">

                            <button class="btn btn-default round-background " type="button" id="menu1">
                                <img src="{{asset('images/pillow4.jpg')}}">
                            </button>
                            <hr>
                            <span class="text-capitalize" data-toggle="tooltip" data-placement="right" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it"> <strong>[COMPANY NAME]</strong> </span>
                            <span> Pillow,soft,50cm</span>
                            <h3><strong>RM50</strong></h3>
                            <ul>

                                <li class="ratings">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span>(60) </span>
                                </li>
                                <ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        @endsection

        @push('style')
        <style>
            img {
                border-radius: 50%;
                height: 150px;
                width: 150px;

            }

            .list-group-item {
                border: 0;
                padding: .15rem .75rem;
                border: 1px;
                solid: #e5e5e5;
            }

            .checked {
                color: orange;
            }


            ul {
                list-style-type: none;
            }

            .ratings {

                margin-left: -40px;
            }
        </style>
        @endpush