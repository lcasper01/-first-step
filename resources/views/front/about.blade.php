@extends('template.template1')
  @section('head')
    @parent
  @endsection

  @section('header')
    @parent
  @endsection

@section('banner')
@endsection

@section('content')

<div class="about">
	<div class="about-top">
		<h3>Little Bit About us</h3>
		<div class="col-md-4 abouttop-left">
			<a href="#"><img src="images/ab.jpg" alt=""/></a>
		</div>
		<div class="col-md-8 abouttop-right">
			<h4><a href="#">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</a></h4>
			<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue their duty through weakness To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>
@endsection

@section('footer')
  @parent
@endsection('footer')
