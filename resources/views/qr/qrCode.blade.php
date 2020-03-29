<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    
<div class="visible-print text-center">
	<h1>QR Code - Generate to update status of PO</h1>
     
    {!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}
     
    <p>Work In Progress- Should scan and generate update PO status</p>
</div>
    
</body>
</html>