<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice - {{ $booking->booking_reference }}</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; margin: 0; padding: 20px; font-size: 14px; }
        .header { border-bottom: 2px solid #0f172a; padding-bottom: 20px; margin-bottom: 30px; clear: both; overflow: hidden; }
        .logo { float: left; }
        .logo h1 { margin: 0; color: #0f172a; font-size: 28px; }
        .logo p { margin: 5px 0 0 0; color: #64748b; }
        .invoice-details { float: right; text-align: right; }
        .invoice-details h2 { margin: 0; color: #0ea5e9; font-size: 24px; }
        .invoice-details p { margin: 5px 0 0 0; }
        
        .addresses { clear: both; margin-bottom: 40px; overflow: hidden; }
        .company-address { float: left; width: 45%; }
        .customer-address { float: right; width: 45%; text-align: right; }
        
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th { background: #f8fafc; border-bottom: 2px solid #cbd5e1; padding: 12px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #e2e8f0; }
        th.right, td.right { text-align: right; }
        
        .totals { float: right; width: 40%; }
        .totals table th { background: transparent; border: none; padding: 8px; text-align: right; }
        .totals table td { border: none; padding: 8px; text-align: right; }
        .totals table tr.grand-total th, .totals table tr.grand-total td { border-top: 2px solid #0f172a; font-size: 18px; font-weight: bold; }
        
        .footer { clear: both; margin-top: 80px; text-align: center; color: #94a3b8; font-size: 12px; border-top: 1px solid #e2e8f0; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Viaje Car Rental</h1>
            <p>Premium Fleet & Services</p>
        </div>
        <div class="invoice-details">
            <h2>INVOICE</h2>
            <p><strong>Ref:</strong> {{ $booking->booking_reference }}</p>
            <p><strong>Date:</strong> {{ \Carbon\Carbon::now()->format('M d, Y') }}</p>
            <p><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{ $booking->payment_method }}</span></p>
        </div>
    </div>

    <div class="addresses">
        <div class="company-address">
            <strong>Billed From:</strong><br>
            Viaje Car Rental<br>
            NAIA Terminal 3, Pasay City<br>
            Metro Manila, Philippines 1300<br>
            hello@viajecarrental.com
        </div>
        <div class="customer-address">
            <strong>Billed To:</strong><br>
            {{ $booking->customer_name }}<br>
            {{ $booking->customer_email }}<br>
            Phone: {{ $booking->customer_phone }}<br>
            Flight: {{ $booking->flight_number ?? 'N/A' }}
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Dates</th>
                <th class="right">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <strong>Vehicle Rental</strong><br>
                    {{ $booking->car->name }} ({{ $booking->car->categoryName }})<br>
                    Pickup: {{ $booking->pickup_location }}<br>
                    Dropoff: {{ $booking->dropoff_location }}
                </td>
                <td>
                    {{ \Carbon\Carbon::parse($booking->pickup_date)->format('M d') }} - 
                    {{ \Carbon\Carbon::parse($booking->dropoff_date)->format('M d, Y') }}
                </td>
                <td class="right">PHP {{ number_format($booking->base_rate, 2) }}</td>
            </tr>
            @if($booking->addon_cdw || $booking->addon_driver || $booking->addon_toll)
            <tr>
                <td>
                    <strong>Add-ons & Extras</strong><br>
                    @if($booking->addon_cdw) - Full Insurance Coverage<br> @endif
                    @if($booking->addon_driver) - Professional Chauffeur<br> @endif
                    @if($booking->addon_toll) - RFID/Toll Load<br> @endif
                </td>
                <td>-</td>
                <td class="right">
                    @php
                        $start = \Carbon\Carbon::parse($booking->pickup_date);
                        $end = \Carbon\Carbon::parse($booking->dropoff_date);
                        $days = max(1, $start->diffInDays($end));
                        $addonsTotal = 0;
                        if($booking->addon_cdw) $addonsTotal += 450 * $days;
                        if($booking->addon_driver) $addonsTotal += 1200 * $days;
                        if($booking->addon_toll) $addonsTotal += 1000;
                    @endphp
                    PHP {{ number_format($addonsTotal, 2) }}
                </td>
            </tr>
            @endif
        </tbody>
    </table>

    <div class="totals">
        <table>
            <tr>
                <th>Subtotal:</th>
                <td>PHP {{ number_format($booking->total_amount - $booking->tax_amount, 2) }}</td>
            </tr>
            <tr>
                <th>VAT (12%):</th>
                <td>PHP {{ number_format($booking->tax_amount, 2) }}</td>
            </tr>
            <tr class="grand-total">
                <th>Grand Total:</th>
                <td>PHP {{ number_format($booking->total_amount, 2) }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Thank you for your business!<br>
        If you have any questions concerning this invoice, contact our support at hello@viajecarrental.com
    </div>
</body>
</html>
