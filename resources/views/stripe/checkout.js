// This is your test secret API key.
const stripe = Stripe("pk_test_51PZCCv2KFnGSCktKp7It7cbq7Y6QkthbMkrQg8KYvcgMBnXVQhmPps66BJkc1pyLpSpOTPPJGgcBk4InEkZex5P200b4bhYatP");

initialize();

// Create a Checkout Session
async function initialize() {
  const fetchClientSecret = async () => {
    const response = await fetch("/checkout.php", {
      method: "POST",
    });
    const { clientSecret } = await response.json();
    return clientSecret;
  };

  const checkout = await stripe.initEmbeddedCheckout({
    fetchClientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}