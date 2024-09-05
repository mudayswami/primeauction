@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
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
    font-size:4rem;
    font-weight:600;
    }

@endpush

@push('content')
    <main id="MainContent" class="" role="main" tabindex="-1">
        <section id="" class="container py-5">
            <h1 class="py-3 fs-1 fw-bold">
                FAQ
            </h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <h2 class="accordion-header fs-5 py-4">Buyer and Seller Information for Auction Sales</h2>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Contract of Sale
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">The contract of sale is between the buyer and the seller. While the
                            auction house collects payment, it does so on behalf of the seller, acting as their agent. Both
                            parties should be aware of the following procedures.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Seller Disclosure Requirements
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sellers must provide comprehensive information to help bidders make
                            informed decisions. They are required to disclose any material defects, faults, or damage to the
                            goods. If no such information is provided, it is assumed that the goods are in working or
                            running order.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Addressing Issues with Purchases
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Goods should be checked upon collection or delivery, or as soon as
                            possible thereafter. Any issues must be reported to both the seller and the auctioneer within 10
                            days. If immediate inspection is not possible, sign for the goods as ‘received unchecked’ to
                            allow the seller to address potential transit damage. The auction house will assist in disputes
                            but cannot intervene after the 10-day period; issues raised after this time should be directed
                            to the seller using their contact details on your Collection Note.
                            Failure to respond promptly and appropriately to claims may result in the auctioneer reassessing
                            their relationship with the seller to ensure they represent reliable, honest, and quality
                            sellers only.</div>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                        <h2 class="accordion-header" id="headingthree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">

                            </button>
                        </h2>
                        <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"></div>
                        </div>
                    </div> -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingthree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            Disputes over Diamonds or Gemstones
                        </button>
                    </h2>
                    <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Disputes regarding the quality or authenticity of diamonds and gemstones are mediated by the
                            independent AnchorCert Gem Lab in Birmingham’s Jewellery Quarter. Buyers should notify the
                            seller and auctioneer immediately and can submit the stone for testing through the auctioneer’s
                            account with AnchorCert. The lab's assessment will guide mediation.
                            If the description is found to be misleading, the stone will be returned to the seller, and the
                            buyer will receive a full refund, including assessment fees. If the description is accurate, the
                            buyer will be responsible for the assessment fees. The auction house will refund any auction
                            fees if the buyer's complaint is upheld and they are refunded for the item. The auction house
                            may recover these fees from the seller if the description is found to be misleading. Sellers
                            should ensure they are confident in their item descriptions.
                        </div>
                    </div>
                </div>
                <h2 class="accordion-header fs-5 py-4">Registeration</h2>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsethree">
                            Why Do I Need to Register a Payment Card?
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            To create a bidding account, we need to verify your identity. Card details are used to
                            cross-reference with the names and addresses on the accounts to prevent fraudulent bidding and
                            maintain the integrity of the auctions. Funds will not be debited from your card for bidding.
                            Once you win lots in an auction, you will receive an email invoice with payment instructions.
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endpush

@push('scripts')
    <script>

    </script>

@endpush