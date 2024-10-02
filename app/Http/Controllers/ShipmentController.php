<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf; // Include PDF facade
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Mail;
use App\Mail\LrDocumentMail;
use Illuminate\Support\Facades\Auth; // Add at the top of your controller

use Illuminate\Support\Facades\Storage;


class ShipmentController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        // dd($user);

        // Fetch the shipments that belong to the logged-in user
        $shipments = $user->shipments;
        return view('home', ['shipments' => $shipments]);
    }

    public function store(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'from_company' => 'required|string|max:255',
            'to_company' => 'required|string|max:255',
            'from_address' => 'required|string|max:255',
            'to_address' => 'required|string|max:255',
            'vehicle_number' => 'required|string|max:255',
            'model_name' => 'required|string|max:255',
            'driver_name' => 'required|string|max:255',
            'driver_no' => 'required|string|max:255',
            'product_name.*' => 'required|string|max:255',
            'quantity.*' => 'required|integer',
            'price.*' => 'required|numeric',
            'invoice_number.*' => 'required|string|max:255',
            'invoice_date.*' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle multiple invoices and products
        $invoice_numbers = $request->input('invoice_number');
        $invoice_dates = $request->input('invoice_date');
        $product_names = $request->input('product_name');
        $quantities = $request->input('quantity');
        $prices = $request->input('price');

        // Loop through and store each set of product details and invoice
        foreach ($invoice_numbers as $index => $invoice_number) {
            Shipment::create([
                'from_company' => $request->input('from_company'),
                'to_company' => $request->input('to_company'),
                'from_address' => $request->input('from_address'),
                'to_address' => $request->input('to_address'),
                'vehicle_number' => $request->input('vehicle_number'),
                'model_name' => $request->input('model_name'),
                'driver_name' => $request->input('driver_name'),
                'driver_no' => $request->input('driver_no'),
                'product_name' => $product_names[$index],  // store product name
                'quantity' => $quantities[$index],  // store quantity
                'price' => $prices[$index],  // store price
                'invoice_number' => $invoice_number,  // store invoice number
                'invoice_date' => $invoice_dates[$index],  // store invoice date
                'user_id' => Auth::id(),  // Associate with the logged-in user
            ]);
        }

        return redirect('dashboard-transaction')->with('success', 'Shipment created successfully.');
    }



    public function index()
    {
        $user = Auth::user();

        $shipments = $user->shipments;
        return view('dashboard-transaction', ['shipments' => $shipments]);
    }
    // public function view(Request $request)
    // {

    //     $shipmentId = $request->query('id');

    //     $shipments = Shipment::all($shipmentId); // Fetch all shipments from the database
    //     return view('apps-ecommerce-extract-overview', ['shipments' => $shipments]);
    // }
    public function extractOverview(Request $request)
    {
        $shipmentId = $request->query('id');

        // Fetch the shipment based on the ID
        $shipment = Shipment::find($shipmentId);

        // Check if the shipment exists
        if (!$shipment) {
            return redirect()->back()->with('error', 'Shipment not found');
        }

        return view('apps-ecommerce-extract-overview', ['shipment' => $shipment]);
    }



    public function details(Request $request)
    {
        $shipmentId = $request->query('id');

        //     // Fetch the shipment based on the ID
        $shipment = Shipment::find($shipmentId);

        // Check if the shipment exists
        if (!$shipment) {
            return redirect()->back()->with('error', 'Shipment not found');
        }
        // $shipments = $user->shipments;
        return view('apps-ecommerce-generate-lr', ['shipment' => $shipment]);
    }

    // public function showShipments(Request $request)
    // {
    //     $shipmentId = $request->query('id');

    //     // Fetch the shipment based on the ID
    //     $shipments = Shipment::find($shipmentId);

    //     // Check if the shipment exists
    //     if (!$shipments) {
    //         return redirect()->back()->with('error', 'Shipment not found');
    //     }
    //     return view('apps-ecommerce-generate-lr', ['shipments' => $shipments]);
    // }

    public function document()
    {
        $shipments = Shipment::all(); // Fetch all shipments from the database
        return view('lr_documents', ['shipments' => $shipments]);
    }
    public function generateBill($id, $action = 'download', $type = 'original')
    {
        try {
            // Retrieve the LR record from the database
            $lrData = Shipment::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            // Handle the error if the record is not found
            return redirect()->back()->with('error', 'LR data not found.');
        }

        // Determine the view name based on the type
        $viewName = $type === 'duplicate' ? 'generate-lr-copydup' : 'generate-lr-copy';

        // Load the Blade view and pass the data to it
        $pdf = Pdf::loadView($viewName, compact('lrData'));

        // Determine the filename based on the type (Original or Duplicate)
        $filename = 'generate-lr-copy_' . $type . '_' . $lrData->id . '.pdf';

        // Check the action type: 'print' or 'download'
        if ($action === 'print') {
            // Render the PDF in the browser for printing
            return $pdf->stream($filename);
        }

        // Default action: download the PDF
        return $pdf->download($filename);
    }

    public function sendEmail(Request $request, $shipmentId)
    {


        try {
            $lrData = Shipment::findOrFail($shipmentId);
            // dd($lrData);

            // Get email inputs from modal

            $emailTo = $request->input('emailTo');
            $emailCc = $request->input('emailCc');
            $emailBcc = $request->input('emailBcc');
            $emailSubject = $request->input('emailSubject');
            $emailBody = $request->input('emailBody');

            // Generate PDF
            $pdf = Pdf::loadView('generate-lr-copy', compact('lrData'));

            // Send the email with attachments
            Mail::to($emailTo)
                ->cc($emailCc)
                ->bcc($emailBcc)
                ->send(new LrDocumentMail($lrData, $pdf, $emailSubject, $emailBody));

            \Log::info("Email sent successfully to: {$emailTo}");


            $lrData->update(['status' => 'lr_generated']);


            return response()->json(['success' => true, 'message' => 'Email sent successfully.']);
            // return view('dashboard-transaction', ['success' => true, 'message' => 'Email sent successfully.']);

        } catch (\Exception $e) {
            \Log::error($e->getMessage());  // Log the error for debugging
            return response()->json(['error' => true, 'message' => 'Failed to send email.']);
        }
    }

    public function verifyExtract(Request $request)
    {
        // Validate the image upload
        $request->validate([
            'vehicle_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('vehicle_photo')) {
            $image = $request->file('vehicle_photo');

            // Save the image in the 'vehicle' folder within 'storage/app/public'
            $imagePath = $image->store('vehicle', 'public');

            // Full path to send to the API
            $imageFullPath = storage_path("app/public/{$imagePath}");

            // Call the external API to verify the vehicle
            $vehicleNumberData = $this->callExternalApiForVehicle($imageFullPath);

            // Check if the response contains the extracted vehicle number
            if (isset($vehicleNumberData['vehicle_number'])) {
                // Store the extracted vehicle number in the session
                return redirect()->back()->with('success', 'Vehicle number extracted successfully: ' . $vehicleNumberData['vehicle_number'])
                    ->with('vehicle_number', $vehicleNumberData['vehicle_number']);
            } else {
                // Flash an error message to the session
                return redirect()->back()->with('error', 'Vehicle number extraction failed. Please try again.');
            }
        } else {
            return back()->with('error', 'No vehicle photo uploaded.');
        }
    }


    private function callExternalApiForVehicle($imageFullPath)
    {
        $client = new \GuzzleHttp\Client();

        try {
            // Send the image as multipart form data
            $response = $client->post('http://finlogesticpyapi.finanalyz.com/api/extract_vehicle_number', [
                'multipart' => [
                    [
                        'name' => 'image',  // The field name the API expects
                        'contents' => fopen($imageFullPath, 'r'),  // Open the file and send its contents
                        'filename' => basename($imageFullPath)  // Optional: send the file name as well
                    ]
                ]
            ]);

            // Decode the JSON response and return it
            return json_decode($response->getBody(), true);

        } catch (\Exception $e) {
            \Log::error("API call failed: " . $e->getMessage());
            return null;
        }
    }


    public function invoiceExtract(Request $request)
    {
        // Validate the input
        $request->validate([
            'invoice_pdf' => 'required|mimes:pdf|max:5120', // Maximum 5MB PDF file
        ]);

        // Handle the PDF upload
        if ($request->hasFile('invoice_pdf')) {
            $pdf = $request->file('invoice_pdf');

            // Save the PDF in the 'invoices' folder within 'storage/app/public'
            $pdfPath = $pdf->store('invoices', 'public');

            // Full path to send to the API
            $pdfFullPath = storage_path("app/public/{$pdfPath}");

            // Call the external API to verify the invoice and get the details
            $invoiceDetails = $this->KallExternalApi($pdfFullPath);

            // Check if the response contains the E-Way Bill No
            if (isset($invoiceDetails['E-Way Bill No:'])) {
                $extractedEwayBillNo = $invoiceDetails['E-Way Bill No:'];

                // Store the extracted E-Way Bill No in the session to display in the view
                $request->session()->flash('eway_bill_no', $extractedEwayBillNo);

                // Find the shipment by its ID (ensure you pass the shipment ID in the form)
                $shipment = Shipment::find($request->shipment_id);

                if ($shipment && $shipment->invoice_number == $extractedEwayBillNo) {
                    // Update the shipment status to 'lr_informed' if the invoice matches
                    $shipment->update(['status' => 'lr_informed']);

                    return redirect()->back()->with('successs', 'Invoice number matched and status updated successfully!');
                } else {
                    return redirect()->back()->with('errorr', 'Invoice number did not match.');
                }
            } else {
                // Flash an error message if extraction failed
                return redirect()->back()->with('errorr', 'E-Way Bill number extraction failed. Please try again.');
            }
        } else {
            return back()->with('errorr', 'No invoice PDF uploaded.');
        }
    }

    private function KallExternalApi($pdfFullPath)
    {
        $client = new \GuzzleHttp\Client();

        try {
            // Send the PDF as multipart form data
            $response = $client->post('http://finlogesticpyapi.finanalyz.com/api/extract_ewaybill', [
                'multipart' => [
                    [
                        'name' => 'pdf',  // The field name the API expects
                        'contents' => fopen($pdfFullPath, 'r'),  // Open the file and send its contents
                        'filename' => basename($pdfFullPath)  // Optional: send the file name as well
                    ]
                ]
            ]);

            $responseData = json_decode($response->getBody(), true);

            // Return the full response for extraction purposes
            return $responseData;


        } catch (\Exception $e) {
            // \Log::error("API call failed: " . $e->getMessage());
            return ['status' => 'error', 'message' => 'API call failed: ' . $e->getMessage()];
        }
    }

}
