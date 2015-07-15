<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
@section('base_header')
@include('home.block.base_header')
@show
</head>

<body>
<!-- top -->
<div class="top">
      @section('header')
          @include('home.block.header')
      @show

</div>
<!-- end top -->
<!-- main -->
<div class="main">
    <div class="wrap">
           <div class="sodiv tubiao">
		          	<div class="so_logo"><img src="/site/images/sologo.png" width="363" height="66" /></div>
			   		@include('home.block.search');
				  <!-- end -->
		   </div>
		   <!-- 新闻 -->
		   <div class="content">
	       <div class="c_qiehuan">
		          <!---->
				  <div class="c_q_title">
				         <ul>
						    <li><a href="" class="select_a">新闻</a></li>
							<li><a href="">体育</a></li>
							<li><a href="">财经</a></li>
							<li><a href="">军事</a></li>
							<li><a href="">房产</a></li>
							<li><a href="">视频</a></li>
							<li><a href="">娱乐</a></li>
							<li><a href="">汽车</a></li>
							<li><a href="">文化</a></li>
							<li><a href="">教育</a></li>
							<li><a href="">游戏</a></li>
							<li><a href="">购物</a></li>
							<li><a href="">科技</a></li>
							<li><a href="">时尚</a></li>
							<li><a href="">音乐</a></li>
							<li><a href="">农业</a></li>
						 </ul>
						 <div class="c_q_set"></div>
						 <div class="clear"></div>
				  </div>
				  <div class="index-box">
				  <!---->
				    <div class="c_q_cont" style="display:block;">

						<ul class="new-list-ul">
						     <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>
							 <li><a href="">测试文字测试文字测试文字测试文字测试文字</a></li>

							 <div class="clear"></div>
						</ul>
						<div class="clear"></div>
					   <!---->
				  </div>
				  <!---->
				    <div class="c_q_cont" style="display:none;">
					       体育
					</div>
				  <!---->
				    <div class="c_q_cont" style="display:none;">财经</div>
				  <!---->
				    <div class="c_q_cont" style="display:none;">军事</div>
				  <!---->
				    <div class="c_q_cont" style="display:none;">房产</div>
				  <!---->
				    <div class="c_q_cont" style="display:none;">视频</div>
				  <!---->
				    <div class="c_q_cont" style="display:none;">娱乐</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">汽车</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">文化</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">教育</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">游戏</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">购物</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">科技</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">时尚</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">音乐</div>
				  <!---->
				  <div class="c_q_cont" style="display:none;">农业</div>
				  <!---->
				  </div>
		   </div>
	</div>
		   <!-- end 新闻 -->
	</div>
</div>
<!-- end main -->
<!-- footer -->
@section('footer')
@include('home.block.footer')
@show
<!-- end footer -->
</body>
</html>
