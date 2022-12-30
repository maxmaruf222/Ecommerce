@extends('public.layouts.app')
@section('Main')
    <!-- Start Slider area -->
    @livewire('public.partials.slider')
    <!-- End Slider area -->

    <!-- Start three column banner  -->
    @livewire('public.partials.three-column-banner')
    <!-- End three column banner  -->

    <!-- Start hot deal area  -->
    @livewire('public.partials.hot-deal-area')
    <!-- End hot deal area  -->            
    
    <!-- Start tab product  -->
    @livewire('public.partials.tab-product')
    <!-- End tab product  -->

    <!-- Start home3 three banner layout  -->
    
    @livewire('public.partials.home-three-banner')
    <!-- End home3 three banner layout  -->	            

    <!-- Start sidebar-product design  -->
    @livewire('public.partials.sidebar-product')
    <!-- End sidebar-product design  -->	

    <!-- Start our brand  -->
    @livewire('public.partials.our-brand')
    <!-- End our brand  -->            

    <!-- Start home latest blog  -->
    @livewire('public.partials.home-latest-blog')
    <!-- End home latest blog  -->            

    <!-- Start footer area  -->
    @livewire('public.partials.footer-area')
    <!-- End footer area  -->

    <!-- modal -->
    @livewire('public.partials.model')
@endsection