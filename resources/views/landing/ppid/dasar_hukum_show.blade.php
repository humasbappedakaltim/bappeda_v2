<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            text-align: center;
            padding: 20px;
            margin: 0;
            background-color: #6200ea;
            color: #fff;
            font-size: 24px;
        }
        .iframe-container {
            max-width: 900px;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        iframe {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Document Viewer <br>{{ $data->name }}</h1>
    <div class="iframe-container">
        <iframe
            src="{{ public_path('storage/file/data-center/' . $data->file) }}"
            title="Document Viewer">
        </iframe>
    </div>
</body>
</html>
