<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            background: #4f46e5;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
            margin: -20px -20px 20px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #666;
        }
        .value {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
        </div>

        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        @if(isset($data['phone']))
        <div class="field">
            <div class="label">Phone:</div>
            <div class="value">{{ $data['phone'] }}</div>
        </div>
        @endif

        @if(isset($data['subject']))
        <div class="field">
            <div class="label">Subject:</div>
            <div class="value">{{ $data['subject'] }}</div>
        </div>
        @endif

        <div class="field">
            <div class="label">Message:</div>
            <div class="value">{{ $data['message'] }}</div>
        </div>
    </div>
</body>
</html>
