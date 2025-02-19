<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Result</title>
    <style>
        .result-box {
            padding: 10px;
            border-radius: 5px;
            color: white;
            display: inline-block;
            font-size: 20px;
        }
    </style>
</head>
<body>
    //ito ang nagsisilbing desinyo para sa pag-display ng resulta
    <h2>Value 1: <span style="color: {{ $textColor }};">{{ $num1 }}</span></h2>
    <h2>Value 2: <span style="color: {{ $textColor }};">{{ $num2 }}</span></h2>
    <h2>Operator: Multiply</h2>
    
    <h2>Result:</h2>
    <div class="result-box" style="background-color: {{ $backgroundColor }};">
        {{ $result }}
    </div>
</body>
</html>
