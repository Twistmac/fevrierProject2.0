<?php affichageHeader(); ?>


@foreach($contenus as $content)
    <div class="main-slider-wrapper clearfix content corps">
    
        <div id="site-banner" class="text-center clearfix">
                <div class="container">
                    <h1 class="title wow slideInLeft">Services</h1>
                    <ol class="breadcrumb wow slideInRight">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
    </div>

    <section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h1 class="wow slideInRight">{!! $content->titre !!}</h1><br/>
           <h2 class="wow slideInRight">{!! $content->section1 !!}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.
           </p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                            {!! $content->paragraphe1 !!}
            </div> 
        </div>
    </div>
</section>

<section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h2 class="wow slideInRight">{!! $content->section2 !!}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.</p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                            {!! $content->paragraphe2 !!}
            </div>
        </div>
    </div>
</section>

<section id="announcement-section" class="text-center">
       <div class="container ">
        <!--
           <h5 class="title wow slideInLeft">Espaces publicitaires</h5>
        -->
           <a class="btn" href="{{ $publicites->services->placement1->lien }}"><img src="{{ link_img( $publicites->services->placement1->lienImage ) }}" width="{{ $publicites->services->placement1->width }}" height="{{ $publicites->services->placement1->height }}" alt="{{ $publicites->services->placement1->description }}"></a>
           <a class="btn" href="{{ $publicites->services->placement2->lien }}"><img src="{{ link_img( $publicites->services->placement2->lienImage ) }}" width="{{ $publicites->services->placement2->width }}" height="{{ $publicites->services->placement2->height }}" alt="{{ $publicites->services->placement2->description }}"></a>
       </div>
</section>

<section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h2 class="wow slideInRight">{{ $content->section3 }}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.</p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                            {!! $content->paragraphe3 !!}
            </div>
        </div>
    </div>
</section>
   

<section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h2 class="wow slideInRight">{{ $content->section4 }}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.</p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                            {!! $content->paragraphe4 !!}
            </div>
        </div>
    </div>
</section>

<section id="announcement-section" class="text-center">
       <div class="container ">
           <!--
           <h2 class="title wow slideInLeft">Espaces publicitaires</h2>
         -->
           <a class="btn" href="{{ $publicites->services->placement3->lien }}"><img src="{{ link_img( $publicites->services->placement3->lienImage ) }}" width="{{ $publicites->services->placement3->width }}" height="{{ $publicites->services->placement3->height }}" alt="{{ $publicites->services->placement3->description }}"></a>
           <a class="btn" href="{{ $publicites->services->placement4->lien }}"><img src="{{ link_img( $publicites->services->placement4->lienImage ) }}" width="{{ $publicites->services->placement4->width }}" height="{{ $publicites->services->placement4->height }}" alt="{{ $publicites->services->placement4->description }}"></a>
       </div>
</section>

<section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h2 class="wow slideInRight">{{ $content->section5 }}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.</p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                           {!! $content->paragraphe5 !!}
            </div>
        </div>
    </div>
</section>
<section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h2 class="wow slideInRight">{{ $content->section6 }}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.</p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                            {!! $content->paragraphe6 !!}
            </div>
        </div>
    </div>
</section>
<section id="home-services" class="text-center">
    <header class="section-header home-section-header">
       <div class="container">
           <h2 class="wow slideInRight">{{ $content->section7 }}</h2>
           <p class="wow slideInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
               labore et dolore magna aliquan ut enim ad minim veniam.</p>
       </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="property-single-metax">
                            {!! $content->paragraphe7 !!}
            </div>
        </div>
    </div>
</section>
</body>
@endforeach
@include('front.footer')