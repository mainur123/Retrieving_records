<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visit User-data</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered shadow texc-center table-striped mt-5">
    <tr>
        <th>Name</th>
        <th>Last Installment</th>
        <th>Total Amount</th>
        <th>Last Installment Amount</th>
        {{-- <th>Total Due</th> --}}
        <th>Installment Number</th>
    </tr>

        
        <tr>
            
            <td>{{ $user_name_table }}</td>
            <td>{{ $ins_date_table }}</td>
            <td>{{ $total_amount_table }}</td>
            <td>{{ $ins_amount_table }}</td>
            {{-- <td>{{ $due_table }}</td> --}}
            <td>{{ $num_ins_table }}</td>
        
        </tr>
        
</table>


</body>
</html>

{{-- <script>
    if ( window.history.replaceState ) {
        // window.location.href = "http://www.w3schools.com";
        
        setTimeout(() => {  window.history.replaceState( null, null, window.location.href="/installment"); }, 2000);
    }
</script> --}}

<script>
    if ( window.history.pushState ) {
        history.pushState(null, null, '/installment');
    }
</script>