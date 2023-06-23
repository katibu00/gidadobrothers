<!DOCTYPE html>
<html>
<head>
    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        /* Header styles */
        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo {
           text-align: center;
        }

        .business-name {
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }

        .contact-details {
            font-size: 11px;
            margin-top: 3px;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th, td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #000;
            font-size: 12px;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
           
        </div>
        <div class="business-name">Gidado Brothers Ltd</div>
        <div class="contact-details">
            Address: No. 20 Mallam Ibrahim Mori Nipost Complex<br>
            Phone: 0812-416-2496, 0813-272-2493<br>
            Email: support@gidadobrothers.com<br>
            Website: www.gidadobrothers.com
        </div>
       
        <div style="font-size: 13px; margin-top: 10px;">Transaction ID: <span class="tran_id">></span></div> <!-- Added Transaction ID -->
    </div>

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody id="receipt_body">
        </tbody>
        <tfoot>
            {{-- <tr>
                <td colspan="3" style="text-align: right;">Subtotal:</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;">Tax (%):</td>
                <td>0.00</td>
            </tr> --}}
            <tr>
                <td colspan="3" style="text-align: right;">Total:</td>
                <td id="total"></td>
            </tr>
        </tfoot>
    </table>

    <div style="text-align: center; margin-bottom: 15px;">*** Thank you for your purchase! ***</div>
</body>
</html>
