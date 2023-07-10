<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form Method="" action="{{route('addservice.store')}}">
        @csrf
        @method('post')
        <div class="container">
            <div class="row">
                <label for="servicename">Service</label>
                <input type="text" placeholder="Enter Service name">
            </div>
            <div class="row">
                <label for="serviceprice">Price</label>
                <input type="text" placeholder="Enter Service Price">
            </div>
            <div class="row">
                <label for="servicetype">Category</label>
                <select required><option value="1">Special</option><option value="2">Normal</option></select>
            </div>
            <div class="row">
                <label for="startdate">Start date</label>
                <input type="date" placeholder="">
            </div>
            <div class="row">
                <label for="enddate" name="">End date</label>
                <input type="date" placeholder="">
            </div>
            <div class="row">
                <input type="submit" value="Add service">
            </div>
        </div>
    </form>
</body>
</html>