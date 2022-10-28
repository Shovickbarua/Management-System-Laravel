<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>
       

        <table >
            <thead>
                <tr class="table-danger table-bordered">
                    <th scope="col">Student Id</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Department</th>
                </tr>
            </thead>
            <tbody>
           
                <tr>
                    <td>{{$data->stu_id}}</td>
                    <td>{{$data->fName}}</td>
                   
                    
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Programe</th>
                    <td>Department</td>
                    <td>Joining Year</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Id</td>
                    <td>Programe</td>
                    <td rowspan="3"></td>
                </tr>
		
            </tbody>
        </table>
    </div>
    
</body>
</html>

