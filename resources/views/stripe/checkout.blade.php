<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Payment Method</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <h2>Save Your Card for Future Payments</h2>
    <form id="setup-form">
        <div>
            <label for="cardholder-name">Cardholder Name</label>
            <input type="text" id="cardholder-name" placeholder="Jane Doe" required>
        </div>
        <div id="card-element">
            <!-- Stripe Elements will create input fields here -->
        </div>
        <div id="card-errors" role="alert"></div>
        <button id="submit">Add Card</button>
    </form>

    <script>
        // Initialize Stripe
        var stripe = Stripe('{{env("STRIPE_PUBLISH")}}');
        var elements = stripe.elements();
        var clientSecret = '{{$clientSecret}}'
        // Create an instance of the card Element
        const appearance = {
                theme: 'flat',
            };
            elements = stripe.elements({ appearance, clientSecret });

            const paymentElement = elements.create('payment');
            paymentElement.mount('#card-element');
        // var card = elements.create('card');
        // card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission
        var form = document.getElementById('setup-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Get the cardholder name
            var cardholderName = document.getElementById('cardholder-name').value;

            // Create a SetupIntent and confirm the card setup
            
            stripe.confirmCardSetup(
                '{{ $clientSecret }}', {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardholderName,
                        },
                    },
                }
            ).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the payment method ID to your server
                    fetch('{{url('')}}/store-payment-method', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            payment_method_id: result.setupIntent.payment_method
                        })
                    }).then(function(response) {
                        return response.json();
                    }).then(function(response) {
                        if (response.success) {
                            alert('Payment method added successfully!');
                        } else {
                            alert('Failed to add payment method.');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
