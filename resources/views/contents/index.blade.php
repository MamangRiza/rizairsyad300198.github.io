@extends('layouts.index')
@section('contents')

<!--===Dark About us page About Section===-->
@include('contents.about-me')
<!--===End Dark About us page About Section===-->

<!--===Index1 Dark About page Service Section start===-->
@include('contents.portofolio')
<!--===Index1 Dark About page Service Section end===-->

<!--===Start Dark Process Section===-->
@include('contents.education')
<!--===End Dark Start Project Section===-->

<!--===Start Dark Testimonial Section===-->
@include('contents.skill')
<!--===End Dark Start Testimonial Section===-->

<!--===Start Contact Us White Section===-->
@include('contents.contact-me')
<!--===End Contact Us White Section===-->

@endsection