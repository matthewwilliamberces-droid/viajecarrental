<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0f172a; padding: 20px; text-align: center; color: white; border-radius: 8px 8px 0 0; }
        .content { padding: 30px 20px; border: 1px solid #ddd; border-top: none; border-radius: 0 0 8px 8px; }
        .btn { display: inline-block; padding: 10px 20px; background: #0ea5e9; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Viaje Car Rental</h2>
        </div>
        <div class="content">
            <h3>Hello {{ $booking->customer_name }},</h3>
            <p>Thank you for choosing Viaje Car Rental! Your booking has been successfully confirmed.</p>
            
            <p><strong>Booking Reference:</strong> {{ $booking->booking_reference }}</p>
            <p><strong>Vehicle:</strong> {{ $booking->car->name }}</p>
            <p><strong>Pickup:</strong> {{ \Carbon\Carbon::parse($booking->pickup_date)->format('M d, Y') }} at {{ $booking->pickup_time }}<br>
            <span style="font-size: 0.9em; color: #555;">Location: {{ $booking->pickup_location }}</span></p>
            <p><strong>Dropoff:</strong> {{ \Carbon\Carbon::parse($booking->dropoff_date)->format('M d, Y') }} at {{ $booking->dropoff_time }}<br>
            <span style="font-size: 0.9em; color: #555;">Location: {{ $booking->dropoff_location }}</span></p>
            <p><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{ $booking->payment_method }}</span></p>
            
            <p>We've attached your official invoice to this email as a PDF document.</p>
            
            <p>If you have any questions, simply reply to this email.</p>
            
            <p>Safe travels!<br>The Viaje Car Rental Team</p>
        </div>
    </div>
</body>
</html>
