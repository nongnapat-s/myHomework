<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>ข้อมูลแพทย์</title>
</head>
<body>
    <div class="container-fluid">
            <div class="row" >
                @foreach ($doctors as $doctor)
                        @if ($doctor['gender'] == "female")
                            <div style = "background-color: #FFCCFF" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">{{ $doctor['doctor'] }}{{" เพศหญิง"}}</div>
                        @else 
                            <div style = "background-color: #99CCFF" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">{{ $doctor['doctor'] }}{{" เพศชาย"}}</div>
                        @endif
                @endforeach    
            </div>
    </div>
</body>
</html>