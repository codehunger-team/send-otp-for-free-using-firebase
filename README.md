<p align="center">
    <a href="https://www.codehunger.in" target="_blank">
        <img src="https://www.codehunger.in/assets/image/logo.png"  alt="CodeHunger Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

# Send OTP for Free Using Firebase in Laravel 12 (No SMS Charges)

This repository demonstrates how to integrate **Firebase Phone Authentication** in Laravel to send OTPs for free, without using any paid SMS gateways like Twilio or Msg91.

---

## About This Integration

- Send OTP to mobile numbers via Firebase
- No SMS cost or third-party gateway required
- Blade view with Firebase JavaScript SDK
- reCAPTCHA integration included
- Laravel `.env` configuration for Firebase project

---

## Blog Tutorial

For a detailed step-by-step tutorial, visit the blog post:

[Send OTP for Free Using Firebase in Laravel – Step-by-Step Guide](https://www.codehunger.in/blog/send-otp-for-free-using-firebase-in-laravel-step-by-step-guide-no-sms-charges)

---

## About CodeHunger Pvt Ltd

This tutorial and code sample is proudly created and maintained by **CodeHunger Pvt Ltd**, your trusted partner for custom Laravel and web app development.

- **Website:** [https://www.codehunger.in](https://www.codehunger.in)
- **Contact Us:** [https://www.codehunger.in/contact-us](https://www.codehunger.in/contact-us)

---

## Getting Started

Clone the repository and configure your Firebase project credentials in `.env`:

```env
FIREBASE_API_KEY=your_api_key
FIREBASE_AUTH_DOMAIN=your_project.firebaseapp.com
FIREBASE_PROJECT_ID=your_project_id
FIREBASE_APP_ID=your_app_id
FIREBASE_SENDER_ID=your_sender_id
FIREBASE_MEASUREMENT_ID=your_measurement_id
