@extends('front.master')

@section('content')
@include('front.ourJs')
<div class="greyBg">
    <div class="container">
		<div class="wrapper">
			<div class="row">
				<div class="col-sm-12">
				<div class="breadcrumbs">
			        <ul>
			          <li><a href="#">Home   </a></li>
			          <li><span class="dot">/</span>
                  @if(count($data)=="0")
                  <b>{{$catByUser}}</b>
                  @else
                  @if($catByUser=="All Products")
                  <a href="{{url('products')}}">
                    {{$catByUser}}</a>
                  @else
                    <a href="{{url('products')}}/{{$catByUser}}">
                      {{$catByUser}}</a>
                      @endif
                  @endif
                 </li>
			        </ul>
                </div>
                </div>
		    </div>
		  @if(count($data)!="0")
        <h1 class="text-center">{{$catByUser}} </h1>
		    <div class="row">
		    		<div class="col-xs-6 col-sm-3">
				    	<div class="nice-select">
							<span class="current">Shop Categories</span>
							<ul class="list">
							   <li class="option selected">Some option</li>
                 @foreach(App\cats::all() as $cList)
                 <li class="option" id="cat{{$cList->id}}"
                 value="{{$cList->id}}">{{$cList->cat_name}}</li>
                 @endforeach
							</ul>
						</div>
				    </div>
				    <div class="col-xs-6 col-sm-3">
						<select id="selectbox2">
						    <option value="">Price</option>
						    <option value="aye">Aye</option>
						    <option value="eh">Eh</option>
						    <option value="ooh">Ooh</option>
						    <option value="whoop">Whoop</option>
						</select>
          </div>


				<div class="col-sm-6 hidden-xs">
					<div class="row">

						<div class="col-sm-4 pull-right">
							<select id="selectbox3">
							    <option value="">Sort By</option>
							    <option value="aye">Aye</option>
							    <option value="eh">Eh</option>
							    <option value="ooh">Ooh</option>
							    <option value="whoop">Whoop</option>
							</select>
						</div>
						<div class="styleNm">16 style(s)</div>
					</div>
				</div>
        @endif
		    </div>
	    	<div class="row top25">

        @if(count($data)=="0")
        <div class="col-md-12" align="center">

            <h1 align="center" style="margin:20px">
              No products found under
              <b style="color:red">{{$catByUser}} </b>
                Category </h1>

        </div>
        @else
        <div id="productData">
          @foreach($data as $p)
          <div class="col-xs-6 col-sm-4" >
	    			<div class="itemBox">
	    				<div class="prod">
                <img
                src="{{Config::get('app.url')}}/public/img/{{$p->pro_img}}" alt=""
                width="400px" height="360px" /></div>
	    				<label>{{$p->pro_name}}</label>
	    				<span class="hidden-xs">Code: {{$p->pro_code}}
              <br>
              {{$p->pro_info}}</span>
	    				<div class="addcart">
	    					<div class="price">Rs {{$p->pro_price}}</div>
	    					<div class="cartIco hidden-xs"><a href="/"></a></div>
	    				</div>
	    			</div>
	    		</div>
          @endforeach
        </div>
          @endif
	    	</div>
		</div>
	</div>
</div>

@endsection
