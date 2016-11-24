@extends('_includes.base')

@section('body')
    <div class="docs">
        <nav id="slide-menu" class="slide-menu" role="navigation">

        	<div class="brand">
        		<a href="/">
        			<img src="/assets/img/laravel-logo-white.png" height="50">
        		</a>
        	</div>

        	<div class="slide-docs-nav">
        		<h2>Documentation</h2>
        		{!! $index !!}
        	</div>
        </nav>

        <div class="docs-wrapper container">

        	<section class="sidebar">
        		{!! $index !!}
        	</section>

        	<article>
        		@yield('doc_content')
        	</article>
        </div>
    </div>
@endsection
