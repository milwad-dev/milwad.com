@extends('home.layout.master')

@section('title', $repo)

@section('content')
    <section class="doc_documentation_area mt-5" id="sticky_doc">
        <div class="overlay_bg"></div>
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-3 doc_mobile_menu display_none">
                    @include('home.pages.docs.nav')
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="documentation_info">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
