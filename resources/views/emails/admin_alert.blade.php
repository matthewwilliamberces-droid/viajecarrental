<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .alert-box { background: #fef3c7; border: 1px solid #f59e0b; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert-box">
            <h3 style="margin-top: 0; color: #b45309;">New Booking Received!</h3>
            <p><strong>Reference:</strong> {{ $booking->booking_reference }}</p>
            <p><strong>Customer:</strong> {{ $booking->customer_name }} ({{ $booking->customer_email }})</p>
            <p><strong>Vehicle:</strong> {{ $booking->car->name }}</p>
            <p><strong>Pickup:</strong> {{ $booking->pickup_date }} ({{ $booking->pickup_location }})</p>
            <p><strong>Dropoff:</strong> {{ $booking->dropoff_date }} ({{ $booking->dropoff_location }})</p>
            <p><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{ $booking->payment_method }}</span></p>
            <p><strong>Total Amount:</strong> ₱{{ number_format($booking->total_amount, 2) }}</p>
        </div>
        <p><a href="{{ url('/admin/bookings') }}">Log in to Dashboard</a> to view details.</p>
    </div>
</body>
</html>
