@extends('site.template.template')

@section('Header-Banner')
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner hero-banner--sm" style="background:url({{ asset('site/img/hero/hero.png') }}) left center no-repeat;">
                <div class="hero-banner__content">
                    <h1>About US</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('Home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('Content')

<section class="blog-post-area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_blog_details">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non massa tincidunt,
                        posuere velit vel, porta purus. Vivamus finibus pellentesque lectus sed vulputate. 
                        Cras ac metus pellentesque, rutrum magna in, dapibus velit. Mauris enim eros, volutpat 
                        sed laoreet at, ultrices vitae lectus. In ultricies, elit vel consectetur ornare, ex 
                        velit bibendum elit, in consequat diam libero ultricies dolor. Aliquam tincidunt magna 
                        id arcu rhoncus hendrerit. Aliquam posuere, nisi ut sagittis efficitur, nisi dui 
                        dictum sem, quis tincidunt ligula lorem at risus. Ut id nunc tincidunt, euismod 
                        neque a, dictum est. Aenean sit amet rutrum lorem. Sed placerat facilisis eros, eu 
                        semper eros aliquet ut. Nullam mollis enim eu accumsan facilisis. Etiam convallis 
                        pellentesque nisl vitae elementum. In bibendum lacus mauris, vitae commodo quam congue 
                        quis. Vestibulum quis posuere elit.
                    </p>
                    <p>
                        Proin tristique tortor at lorem commodo, in elementum lorem commodo. Donec quis ipsum
                        in lectus sodales dictum sed eget augue. In vitae porttitor orci. Pellentesque risus 
                        nisl, malesuada sed nibh at, mattis vehicula felis. Ut quam massa, bibendum id nibh 
                        sed, lacinia gravida orci. Phasellus varius dignissim sem nec pharetra. Suspendisse 
                        scelerisque pretium velit, nec ultrices sem sodales eget. Curabitur lacinia eros eu 
                        nulla vulputate scelerisque. Nulla facilisi. Suspendisse id pharetra leo. Interdum et 
                        malesuada fames ac ante ipsum primis in faucibus. Curabitur dapibus nulla a justo 
                        lobortis, eget viverra ante efficitur.
                    </p>
                    <p>
                        Nam tempor pretium orci. Vestibulum augue leo, rutrum nec lorem nec, aliquet sodales 
                        metus. Pellentesque vulputate enim ut ligula cursus, et eleifend velit feugiat. 
                        Suspendisse nisi nibh, gravida porttitor libero quis, consectetur placerat sapien. 
                        Donec ut faucibus mi. Donec posuere nibh sollicitudin dui convallis imperdiet. 
                        Vestibulum finibus erat condimentum dictum scelerisque. Duis leo mi, aliquam eget 
                        quam nec, pretium ullamcorper tortor. Nunc blandit, sem quis pretium faucibus, felis 
                        mi imperdiet sem, eu facilisis odio mauris luctus elit. Quisque non ipsum augue. 
                        Suspendisse et fermentum arcu. Suspendisse lobortis accumsan mollis. Maecenas 
                        efficitur lectus quam, volutpat varius sapien venenatis nec. Fusce id egestas metus. 
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque 
                        penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat sapien non egestas dictum. 
                        Suspendisse sit amet nisi in eros fringilla commodo. Pellentesque laoreet mauris eget ipsum mattis, 
                        quis tempus mi feugiat. Morbi eleifend erat ac risus pellentesque, sit amet efficitur risus lobortis. 
                        Sed at auctor ipsum. Sed at lacus non nisi mollis iaculis at at nibh. Vivamus accumsan mauris sit amet 
                        laoreet mattis. Integer tincidunt velit sit amet urna cursus, sed semper magna posuere.
                    </p>
                    <p>
                        Cras gravida lacus augue. Vestibulum placerat orci id iaculis pharetra. Sed venenatis hendrerit nibh 
                        iaculis pretium. Nullam congue velit at nunc suscipit, porttitor rhoncus turpis semper. Sed molestie 
                        dui ex, quis eleifend purus tristique eget. Pellentesque quis lacus eget tortor blandit faucibus at 
                        interdum metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection