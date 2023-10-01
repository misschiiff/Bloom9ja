document.addEventListener("DOMContentLoaded", function() {
    const publicKey = 'YOUR_PUBLIC_KEY'; // Replace with your actual Paystack public key
    const emailInput = document.getElementById("email");
    const amountInput = document.getElementById("amount");
    const payButton = document.getElementById("pay-button");

    payButton.addEventListener("click", function() {
        const email = emailInput.value;
        const amount = parseFloat(amountInput.value) * 100; // Amount in kobo (NGN)

        // Initialize Paystack inline
        const handler = PaystackPop.setup({
            key: publicKey,
            email: email,
            amount: amount,
            currency: "NGN",
            ref: "unique_ref", // Replace with a unique reference
            metadata: {
                custom_fields: [{
                    display_name: "Email",
                    variable_name: "email",
                    value: email,
                }, ],
            },
            callback: function(response) {
                // Handle successful payment, e.g., show a success message
                alert("Payment successful! Transaction reference: " + response.reference);
            },
            onClose: function() {
                // Handle payment modal close
                alert("Payment window closed without completing the payment.");
            },
        });

        // Open Paystack payment modal
        handler.openIframe();
    });
});