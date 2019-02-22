<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h2 class="text-center">Contact Form</h2>
        <div class="col-md-6 col-md-offset-3">
            <form action="{{route('send')}}" method="POST">
                <div class="form-group">
                    <label>To</label>
                    <input type="text" name="to" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="4"></textarea>
                </div>
                <div class="form-group">
                    @csrf
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>