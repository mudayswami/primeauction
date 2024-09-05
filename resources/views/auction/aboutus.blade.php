@extends('auction.layout.masterLayout')

@push('meta')
@endpush

@push('styles')
    body{
    color:var(--bluec);
    <!-- background: #e7eff5; -->
    }
    p{
    padding: 2rem 0rem;
    }
    .seo-paragraph{
    opacity:0.8;
    font-weight:400;
    padding: 2rem 0rem;
    }
    .heading img{
    height: auto;
    width: 75%;
    aspect-ratio: 16 / 5;
    padding:2rem 0rem;
    }
    .heading{
        font-size:2rem;
        font-weight:600;
    }
@endpush

@push('content')
    <main id="MainContent" class="" role="main" tabindex="-1">
        <section id="" class="container py-5">
            <h1 class="py-3 fs-3 fw-bold">
                About Us
            </h1>
            <div class="page-width page-width--narrow section-template--20100476698960__main-padding text-center">

                <div class="">
                    <meta charset="utf-8">
                    <div style="" class="heading"><img class="" alt="" src="{{url('assets/store/aboutushero.jpg')}}">
                    </div>
                    <h2 style="" class="heading py-5">We are Prime Auction</h2>
                    <div style="" class="seo-paragraph fs-5">
                        <span>Who are we? Meet Prime Auction, dedicated to
                            revitalising the enjoyment and fairness in purchasing preowned, graded, and refurbished items.
                        </span>Our team finds joy in curating and crafting engaging content for you. Whether you're
                        exploring, purchasing, selling, or doing all three, we want you to relish the experience.
                    </div>
                    <div style="" class="seo-paragraph fs-4">Our diverse team, including
                        a few furry canine assistants, is committed to offering you a vast range of products, from small
                        appliances&nbsp;to large tele-handlers. Our goal is to simplify and infuse excitement into the
                        entire process for you!
                    </div>
                    <p style="" class="seo-paragraph fs-4 ">
                        <span><span style="text-decoration: underline;" class="py-3"><strong>Why choose us?</strong></span><br><br>Our auction website primeauction.com has been growing and
                            thriving for over ten years and from day one we've maintained a 0% seller commission policy. For
                            auction vendors&nbsp;this translates to receiving 100% of the hammer price for their&nbsp;goods.
                            For buyers, this gives access to some of the most attractive deals available! </span>
                    </p>
                    <div style="" class="seo-paragraph fs-5"><span>Our vendors&nbsp;can set practical and
                            attainable
                            reserve prices,
                            confident that they won't lose significant portions of their sales to&nbsp;a third
                            party.&nbsp;</span></div>
                    <div style="" class="seo-paragraph fs-5">
                        <span>With the introduction of our store, we can offer
                            the same amazing saving
                            opportunities for consumers, but on a buy it now basis rather than bidding!
                        </span>
                    </div>
                    <p style="" class="seo-paragraph fs-4"><span><span style="text-decoration: underline;"
                                class="py-4"><strong>Our
                                    values</strong></span><br><br></span><span>We've consistently
                            taken pride in challenging the norms of a traditional industry, leveraging technology,
                            innovation, and creativity to enhance the quality of our services. We've always pioneered
                            positive change, whether we're offering auctions with 0% commission or partnering with
                            organisations like Two Million Tusks to eliminate ivory sales from our platform, we are unafraid
                            to stand apart and do what's right. </span></p>
                    <div style="" class="seo-paragraph fs-5"><span></span></div>
                    <div style="" class="seo-paragraph fs-5">
                        <span>
                            If you have any suggestions, feel free to reach out to us. We're eager
                            to collaborate with customers, likeminded businesses, and service providers to bring about
                            meaningful improvements!
                        </span><br><br>
                    </div>
                </div>
            </div>


        </section>
    </main>
@endpush

@push('scripts')
@endpush