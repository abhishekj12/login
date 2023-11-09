<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Select Country:</label>
                        <select class="form-select">
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>

</body>
</html>
