@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
    <?xml version="1.0" encoding="utf-8"?>
@endpush

@push('styles')
<style>
    
</style>
@endpush

@push('content')

@endpush

@push('scripts')
<!-- Header Section -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Prime Auctions - Terms and Conditions</h1>
        <p>Your guide to our auction process, responsibilities, and policies</p>
    </header>

    <!-- Content Section -->
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">Terms and Conditions for Auction</h2>
                        <p>Welcome to Prime Auctions. By participating in our auctions, whether as a seller or a buyer, you agree to comply with the following terms and conditions. These terms are designed to ensure a transparent, fair, and secure auction process for all participants.</p>

                        <h4>1. Definitions</h4>
                        <ul>
                            <li><strong>Auctioneer:</strong> Refers to Prime Auctions, the organiser of the auction.</li>
                            <li><strong>Seller:</strong> Any individual, business, or entity offering goods for sale through the auction.</li>
                            <li><strong>Buyer:</strong> Any individual, business, or entity purchasing goods through the auction.</li>
                            <li><strong>Lot:</strong> A single item or group of items offered for sale in the auction.</li>
                        </ul>

                        <h4>2. Registration</h4>
                        <p>All participants (buyers and sellers) must register with Prime Auctions prior to bidding or selling. Accurate and up-to-date personal and/or business information must be provided. Prime Auctions reserves the right to refuse or revoke registration at any time at its sole discretion.</p>

                        <h4>3. Seller Responsibilities</h4>
                        <ul>
                            <li>The seller guarantees that they are the legal owner of the assets listed for auction or are duly authorised to sell them.</li>
                            <li>The seller must provide accurate descriptions, images, and information about the lot. Misrepresentation of any kind may result in the lot being withdrawn, with the seller liable for any losses or damages incurred.</li>
                            <li>All sales are final and binding upon the conclusion of the auction. The seller must ensure the sold lot is delivered to the buyer in a timely manner as per the agreed terms.</li>
                        </ul>

                        <h4>4. Buyer Responsibilities</h4>
                        <ul>
                            <li>All bids placed are considered final and legally binding. The highest bid at the end of the auction constitutes the sale price.</li>
                            <li>Buyers are responsible for understanding the condition, description, and value of the item they are bidding on. Prime Auctions provides information as-is and is not liable for any discrepancies between the buyer’s expectations and the actual condition of the goods.</li>
                            <li>Payment for won lots must be made within <strong>[insert time frame, e.g., 7 days]</strong> from the conclusion of the auction. Failure to make payment may result in forfeiture of the winning bid and/or exclusion from future auctions.</li>
                        </ul>

                        <h4>5. Bidding Process</h4>
                        <ul>
                            <li>Bids may be placed online, in person, or through pre-approved channels as defined by Prime Auctions.</li>
                            <li>Prime Auctions reserves the right to set minimum bid increments and starting prices for each lot.</li>
                            <li>In the event of a dispute over bids, the auctioneer's decision will be final. Prime Auctions reserves the right to withdraw any lot or cancel the auction at its discretion.</li>
                        </ul>

                        <h4>6. Reserve Prices</h4>
                        <p>Some lots may be subject to a reserve price, which is the minimum price the seller is willing to accept. The auctioneer will indicate whether a reserve price applies. If the reserve price is not met, the auctioneer is not obligated to sell the lot.</p>

                        <h4>7. Payment Terms</h4>
                        <ul>
                            <li>Prime Auctions accepts payment methods as outlined during registration (e.g., credit card, bank transfer, etc.).</li>
                            <li>Buyers must pay the full purchase price, including any applicable VAT, buyer’s premium, and shipping or handling fees, as specified in the auction details.</li>
                            <li>Ownership of the lot will not transfer to the buyer until full payment has been received and cleared.</li>
                        </ul>

                        <h4>8. Buyer’s Premium</h4>
                        <p>A buyer’s premium of 20% will be added to the hammer price of each lot. This fee is payable by the buyer in addition to the final bid price.</p>

                        <h4>9. Collection and Delivery</h4>
                        <p>Buyers are responsible for arranging collection of purchased lots unless otherwise specified. Where delivery is available, it will be arranged at the buyer's expense. Purchased items must be collected within <strong>[insert time frame]</strong> of the auction’s conclusion, unless alternative arrangements have been made.</p>

                        <h4>10. Liability</h4>
                        <ul>
                            <li>Prime Auctions acts as an intermediary between sellers and buyers and does not assume ownership of any items listed for auction.</li>
                            <li>Prime Auctions is not liable for any disputes between buyers and sellers, including but not limited to disputes related to the condition, authenticity, or provenance of the lot.</li>
                            <li>The auctioneer is not responsible for any damage, loss, or theft of lots occurring after the sale is completed.</li>
                        </ul>

                        <h4>11. Returns and Disputes</h4>
                        <p>All sales are final. No returns or exchanges will be accepted unless explicitly stated in the auction terms for a specific lot. In the event of a dispute, Prime Auctions will make reasonable efforts to mediate, but the final responsibility rests with the buyer and seller.</p>

                        <h4>12. Auction Cancellation or Postponement</h4>
                        <p>Prime Auctions reserves the right to cancel, reschedule, or alter the format of an auction at any time for any reason. In such cases, registered participants will be notified promptly.</p>

                        <h4>13. Privacy Policy</h4>
                        <p>All personal information provided during registration and auction transactions will be handled in accordance with Prime Auctions' Privacy Policy. This information will not be shared with third parties without the participant's consent, except as required by law.</p>

                        <h4>14. Governing Law</h4>
                        <p>These terms and conditions are governed by and construed in accordance with the laws of England and Wales, and any disputes arising shall be subject to the exclusive jurisdiction of the courts in that region.</p>

                        <h4>15. Acceptance of Terms</h4>
                        <p>By participating in any auction hosted by Prime Auctions, all participants agree to these terms and conditions. Non-compliance may result in suspension or permanent exclusion from future auctions.</p>

                        <p>For any queries or further clarification regarding these Terms and Conditions, please contact us. We are here to ensure a smooth and successful auction experience for all involved.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Prime Auctions | All rights reserved.</p>
    </footer>
@endpush