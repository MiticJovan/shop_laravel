@extends('layout.main')

@section('title', 'product')

@section('content')
	     <!-- products listing -->
       
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c05551586.png"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">$2000</span> OMEN Laptop 
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Model
                                <select>
                                    <option value="small">
                                        With GPU integrated
                                    </option>
                                    <option value="medium">
                                        With GPU Extended
                                    </option>
                                    <option value="large">
                                        Basic model
                                    </option>
                                   
                                </select>
                            </label>
                            <a href="#" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
                <p class="text-left subheader"><small>* Designed by <a href="https://www.omszone.com/">OMS Zone</a></small></p>

                </div>
            </div>
        </div>
@endsection