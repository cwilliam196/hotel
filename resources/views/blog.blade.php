@extends('layout.headerOverview')

@section('title', 'Blog')
    
@section('container')

<div class="fh5co-parallax" style="background-image: url(assets/images/adriana-saraceanu-_ixNdO62FSg-unsplash.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">Read Our Blog</h1>
                    <p>seputar tentang Hotel XYZ</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="fh5co-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="blog-grid" style="background-image: url(assets/images/Award.jpg);">
                    <div class="date text-center">
                        <span>09</span>
                        <small>Aug</small>
                    </div>
                </div>
                <div class="desc">
                    <h3><a href="#">Most Comfortable Hotel</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-grid" style="background-image: url(assets/images/Anniversary.jpg);">
                    <div class="date text-center">
                        <span>09</span>
                        <small>Aug</small>
                    </div>
                </div>
                <div class="desc">
                    <h3><a href="#">1st Anniversary of XYZ Hotel</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-grid" style="background-image: url(assets/images/Discovery.jpg);">
                    <div class="date text-center">
                        <span>09</span>
                        <small>Aug</small>
                    </div>
                </div>
                <div class="desc">
                    <h3><a href="#">Discover New Adventure</a></h3>
                </div>
            </div>
           
            
        </div>
    </div>
</div>
@endsection