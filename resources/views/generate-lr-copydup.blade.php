<style>
    .header {
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .container {
        padding: padding: var(--tb-card-spacer-y) var(--tb-card-spacer-x);
        /* height: 100%; */
        /* width: 100%; */

    }

    .content-wrapper {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #000;
    }

    .company-info,
    .contact-info {
        text-align: center;
        font-size: 14px;
    }

    .details,
    .content-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    .details td,
    .content-table td,
    .content-table th {
        border: 1px solid #000;
        padding: 5px;
    }

    .details td {
        width: 25%;
    }

    .content-table th {
        background-color: 112acf000;
        text-align: center;
    }

    .content-table td {
        text-align: center;
    }

    .sign {
        text-align: right;
        margin-top: 20px;
        font-weight: bold;
    }
</style>
<h2 style="text-align: center;">Dupliacte Generated LR</h2>

<div class="container">
    <div class="content-wrapper">
        <div class="header">
            CEARS ENGINEERS PVT. LTD.
        </div>
        <div class="company-info">
            C & F / C.A. for AGRO TECH FOODS LTD<br>
            S.F. No.: 384/9A, Codea Park Road, S.S.Kulam (Po), Kurumbapalayam, CBE,<br>
            Tamilnadu - 641 107. GSTIN: 33ACCC1990L1ZL
        </div>
        <div class="contact-info">
            Mob: +91 86677 52614
        </div>

        <table class="details">
            <tr>
                <td>Station: <strong>{{ $lrData->from_address }}</strong></td>
                <td colspan="2" style="text-align: center;">AT OWNER'S RISK</td>
                <!-- <td colspan="2" style="text-align: center;">AT OWNER'S RISK</td> -->
                <td>Date: <strong>{{ $lrData->created_at->format('d-m-y') }}</strong></td>
                <td>No.: <strong>{{ $lrData->id }}</strong></td>
            </tr>
            <tr>
                <td>Delivery At: <strong>{{ $lrData->to_address }}</strong></td>
                <td colspan="2"></td>
                <td colspan="2">Truck No.: <strong>{{ $lrData->vehicle_number }}</strong></td>
            </tr>
        </table>

        <table class="details">
            <tr>
                <td>Consignor</td>
                <td>Consignee</td>
            </tr>
            <tr>
                <td>
                    <strong>{{ $lrData->from_company }}</strong><br>
                    <!-- {{ $lrData->to_company }} -->
                </td>
                <td>
                    <strong>{{ $lrData->to_company }}</strong><br>
                    <!-- {{ $lrData->consignee_address }} -->
                </td>
            </tr>
        </table>

        <table class="content-table">
            <thead>
                <tr>
                    <th>No. of Packages</th>
                    <th>Description / Said to Contain</th>
                    <th>Actual Weight</th>
                    <th>Weight Charged for</th>
                    <th>Value</th>
                    <th>To be Billed / Paid To-Pay</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $lrData->quantity }}</td>
                    <td> Invoice No :{{ $lrData->invoice_number }}</td>
                    <td>{{ $lrData->quantity }} Kg</td>
                    <td>{{ $lrData->charged_weight }} Kg</td>
                    <td> Rs :{{ number_format($lrData->price) }}</td>
                    <td>{{ $lrData->billing_status }}</td>
                </tr>
            </tbody>
        </table>

        <div class="sign">
            Signature of Booking Officer
        </div>
    </div>

</div>