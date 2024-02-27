@extends('layouts.app')
@section('content')

<form action="{{ route('payment') }}" method="post">
    @csrf
    <input type="text" name="amount" placeholder="Enter Amount">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ env('STRIPE_KEY') }}"
        data-amount="999"
        data-name="Tech Minds Venture"
        data-description="designing development and srs documents building"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto">
    </script>
</form>
@endsection
