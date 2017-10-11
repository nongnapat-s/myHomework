
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<title>ข้อมูลการรับเคส</title>
</head>
<body>
    <div class="container-fluid">
            <div class="row" >
			@foreach ($cases as $case) 
                @foreach ($doctors as $doctor)
                    @if ($case['doctor'] == $doctor['doctor']  )
                        @if ($doctor['gender'] == "female")
                            <div style = "background-color: #FFCCFF" class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">{{ $case['an'] }}{{" รับเคสโดย "}}{{$case['doctor'] }}</div>
                        @else 
                            <div style = "background-color: #99CCFF" class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">{{ $case['an'] }}{{" รับเคสโดย "}}{{$case['doctor'] }}</div>
                        @endif
                    @endif
                @endforeach    
			@endforeach
            </div>
    </div>
</body>
</html>