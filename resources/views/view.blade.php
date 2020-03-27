<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Student Id</th>
    <th>Department</th>
    <th>CGPA</th>
     <th>Sex</th>
    
    

  </tr>
  @foreach($cruds as $crud)
  <tr>
 
    <td>{{$crud->name}}</td>
    <td>{{$crud->student_id}}</td>
    <td>{{$crud->department}}</td>
    <td>{{$crud->cgpa}}</td>
    <td>{{$crud->sex}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
