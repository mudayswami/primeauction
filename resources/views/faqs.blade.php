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
                <h2 class="accordion-header fs-5 fw-bold py-4">Buyer and Seller Information for Auction Sales</h2>

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
                <h2 class="accordion-header fs-5 fw-bold py-4">Registeration</h2>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapsethree">
                            Why Do I Need to Register a Payment Card?
                        </button>
                    </h2>
                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            To create a bidding account, we need to verify your identity. Card details are used to
                            cross-reference with the names and addresses on the accounts to prevent fraudulent bidding and
                            maintain the integrity of the auctions. Funds will not be debited from your card for bidding.
                            Once you win lots in an auction, you will receive an email invoice with payment instructions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapsethree">
                            Is a Deposit Required to Bid?
                        </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        No, bidders are generally not required to pay a deposit to bid. However, in some circumstances, deposits may be required, such as for viewing an item or if the bidder has negative feedback from other auction houses.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapsethree">
                            Pending or Declined Registration?
                        </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        The most common reason for a pending registration is the failure to verify your email address and/or phone number. Check the My Account section to verify these details. We also require a full name; nicknames, single names, or business names are not permitted in the name field. If you have verified all details and your registration is still pending, it may be due to negative feedback on your account from another auction house. If you are unsure why your account is pending or declined, please email us at 
                        </div>
                    </div>
                </div>
                <h2 class="accordion-header fs-5 fw-bold py-4">Bidding & Viewing</h2>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapsethree">
                            How Can I Find Out the Reserve Price of a Lot?
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        All of our lots have blind reserves, meaning the reserve prices are not visible to bidders, and we do not disclose them over the phone. Estimates are provided on many auctions to guide you on what we expect the lot to reach. The system will inform you if the current bid has met the reserve. Each bid placed is considered genuine, and any bids at or above the reserve are contractually binding.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapsethree">
                            Can I Withdraw a Bid I’ve Placed?
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        No, bids cannot be removed once submitted.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapsethree">
                            Why Has a Lot's End Time Been Extended?

                        </button>
                    </h2>
                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        If a bid is placed in the final 10 minutes of any lot, the clock will reset to 10 minutes. This ensures all bidders have fair warning and can place further bids, potentially extending the auction until only one bidder remains. If you cannot monitor the lot for an extended period or at the closing time, we recommend using the maximum bid feature. This allows the software to bid for you up to your maximum bid.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapsethree">
                            Can I Inspect Items in the Auction?
                        </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        Viewing is completely online. Buyers are encouraged to carefully evaluate the listing information and photographs to make informed decisions before making a purchase.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapsethree">
                            Will I be charged VAT on Auction Goods?
                        </button>
                    </h2>
                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        Check each lot to see if VAT is payable. Just below where you enter your bid, you will find a section listing any additional fees, including VAT. The buyer’s premium, also known as auction fees, is always subject to VAT.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapsethree">
                            Will I have to Pay VAT if I am Exporting Goods?
                        </button>
                    </h2>
                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        Yes, VAT is still payable even if you have an EU VAT number. However, the VAT can be refunded upon providing the relevant documentation proving the goods have been exported. Ensure that the documentation is complete and submitted promptly to the seller to obtain a VAT refund. If you intend to export goods, please contact us as early as possible to ensure a smooth process.
                        </div>
                    </div>
                </div>

                <h2 class="accordion-header fs-5 fw-bold py-4">Payment Information for Auction Purchases
                </h2>

                
            </div>

        </section>
    </main>
@endpush

@push('scripts')
    <script>

    </script>

@endpush