<!DOCTYPE html>
<html>
<head>
    <title>Firebase OTP Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Send OTP using Firebase in Laravel</h2>

    <input type="text" id="phone" placeholder="+91XXXXXXXXXX" />
    <div id="recaptcha-container"></div>
    <button onclick="sendOTP()">Send OTP</button>

    <br><br>
    <input type="text" id="otp" placeholder="Enter OTP" />
    <button onclick="verifyOTP()">Verify</button>

    <!-- Firebase SDKs -->
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>

    <script>
        // Laravel-based ENV values
        const firebaseConfig = {
            apiKey: "{{ env('FIREBASE_API_KEY') }}",
            authDomain: "{{ env('FIREBASE_AUTH_DOMAIN') }}",
            projectId: "{{ env('FIREBASE_PROJECT_ID') }}",
            appId: "{{ env('FIREBASE_APP_ID') }}",
            messagingSenderId: "{{ env('FIREBASE_SENDER_ID') }}",
            measurementId: "{{ env('FIREBASE_MEASUREMENT_ID') }}"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const auth = firebase.auth();

        // reCAPTCHA verifier
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
            size: 'normal',
            callback: (response) => {
                console.log("reCAPTCHA solved");
            },
        });

        // Send OTP
        function sendOTP() {
            const phoneNumber = document.getElementById("phone").value;
            const appVerifier = window.recaptchaVerifier;

            auth.signInWithPhoneNumber(phoneNumber, appVerifier)
                .then((confirmationResult) => {
                    window.confirmationResult = confirmationResult;
                    alert("OTP sent!");
                }).catch((error) => {
                    console.error(error);
                    alert("Error sending OTP: " + error.message);
                });
        }

        // Verify OTP
        function verifyOTP() {
            const otp = document.getElementById("otp").value;
            window.confirmationResult.confirm(otp)
                .then((result) => {
                    alert("Phone number verified!");
                }).catch((error) => {
                    alert("Invalid OTP");
                });
        }
    </script>
</body>
</html>
