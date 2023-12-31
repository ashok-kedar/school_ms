
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SCHOOL MGMT</title>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>

<div class="sidebar">
  <a class="active" href="www.youtube.com">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div class="container">
    <div class="row">

        <form id="form" action="{{route('student-store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="Course_Name">
               </div>

               <div class="form-group">
                 <label for="">Teacher_Name</label>
                 <input type="text" class="form-control" name="last_name" id="Teacher_Name">
            </div>

            <div class="form-group">
             <label for="">Batch_Time</label>
             <input type="text" class="form-control" name="Batch_Time" id="Batch_Time">
        </div>

        <div class="form-group">
         <label for="">Teaching_day</label>
         <input type="text" class="form-control" name="Teaching_day" id="Teaching_day">
     </div>

     <div class="form-group">
        <label for="">Scanned Copy Image</label>
        <input type="file" class="form-control" name="Teaching_day" id="Teaching_day">
    </div>

     <div class="form-group">

         <input type="submit" class="form-control btn btn-danger" value="Add Course" id="submit" >
     </div>

           </form>


    </div>
</div>

</body>
</html>
