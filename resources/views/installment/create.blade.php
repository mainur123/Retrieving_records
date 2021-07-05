<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visit User-data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <form method="post" action="{{ route('installment.add') }}"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>File Number</label><br>
                <input type="number"  name="file_no" class="form-control" required>
            </div>
            
            <div class="form-group col">
                <label>Installment</label><br>
                <input type="number" name="installment" class="form-control"/>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
            </div>
        </div>
    </form>
</div>

