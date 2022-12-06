@extends('Frontend.Layout.mainlayout')


@push('title')
<title>Cars </title>
@endpush

@section('remaining_content')
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div class="container_12">
					<div class="grid_12">
						<h3>Economy</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="{{url('Frontend/images/big1.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img1.jpg')}}" alt=""></a></div>
						<div class="grid_4"><a href="{{url('Frontend/images/big2.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img2.jpg')}}" alt=""></a></div>
						<div class="grid_4"><a href="{{url('Frontend/images/big3.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img3.jpg')}}" alt=""></a></div>
					</div>
					<div class="grid_12">
						<h3>Standard</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="{{url('Frontend/images/big4.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img4.jpg')}}" alt=""></a></div>
						<div class="grid_4"><a href="{{url('Frontend/images/big5.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img5.jpg')}}" alt=""></a></div>
						<div class="grid_4"><a href="{{url('Frontend/images/big6.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img6.jpg')}}" alt=""></a></div>
					</div>
					<div class="grid_12">
						<h3>Lux</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="{{url('Frontend/images/big7.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img7.jpg')}}" alt=""></a></div>
						<div class="grid_4"><a href="{{url('Frontend/images/big8.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img8.jpg')}}" alt=""></a></div>
						<div class="grid_4"><a href="{{url('Frontend/images/big9.jpg')}}" class="gal"><img src="{{url('Frontend/images/page3_img9.jpg')}}" alt=""></a></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
@endsection