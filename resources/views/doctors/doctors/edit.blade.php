<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <body>  
        <div class="container">
            <h2>Enter Doctor New Data</h2>
            <form method="POST" action="{{route('doctors.update',['doctor' => $doctor->id])}}">
            @csrf
            {{method_field('PUT')}}
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" value="{{$doctor->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" value="{{$doctor->email}}" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter your new password" name="pwd">
            </div>
            <div class="form-group">
                <label>National ID:</label>
                <input type="number" class="form-control" value="{{$doctor->dr_national_id}}" name="nationalID">
            </div>
            <div class="form-group">
                <label>Pharmacy ID:</label>
                <input type="number" class="form-control" value="{{$doctor->pharmacy_id}}" name="pharmacyname">
            </div>
     
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>
</html>