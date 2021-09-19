<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>


<body>
<div class="jumbotron text-center" style="margin-bottom:2px">
  <h1>Edit Employee</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top">
                <b class="navbar-brand">EMPLOYEE</b>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('employees')}}">All Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('create-employee')}}">Create New Employee</a>
                    </li>
                    </ul>
                </div>  
                </nav>
    <div class="container offset-3">
        
                <h1>Edit Employee</h1>
           
            <div class="col-md-12">
                @if(Session::has('msg'))
            <div class="alert alert-success">
  
            <strong>{{Session::get('msg')}}</strong> 
            </div>
             @endif
                <form action="{{URL::to('update-employee/'.$employee->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Name</b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $employee->name }}" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Email</b></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" value="{{ $employee->email }}" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Salary</b></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" value="{{ $employee->salary }}" name="salary" placeholder="Salary">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"><b>Gender</b></legend>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="male" {{ ($employee->gender == 'male')? 'checked': ''  }}>
                                    <label class="form-check-label">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="female" {{ ($employee->gender == 'female')? 'checked': '' }}>
                                    <label class="form-check-label">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="other" {{ ($employee->gender == 'other')? 'checked': '' }}>
                                    <label class="form-check-label">
                                        other
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2"><b>Active</b></div>
                        <div class="col-sm-8">
                            <div class="form-check" >
                                <input class="form-check-input aaa" id="A" name="is_active" type="checkbox" value="1" {{ ($employee->is_active=='1')? 'checked':''}}>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Birthdate</b></label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" value="{{ $employee->birthdate }}" name="birthdate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Department</b></label>
                        <div class="col-sm-8">
                        <select name="department" class="custom-select">
                            <option selected>--Select--</option>
                            <option value="Computer Science & Engineering" {{ ($employee->department =='Computer Science & Engineering')? 'selected':''}}>Computer Science & Engineering</option>
                            <option value="Mechanical Engineering" {{ ($employee->department =='Mechanical Engineering')? 'selected':''}}>Mechanical Engineering</option>
                            <option value="Civil Engineering" {{ ($employee->department =='Civil Engineering')? 'selected':''}}>Civil Engineering</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success col-12">Update</button>
                        </div>
                    </div>
                    
                </form>
            </div>
       
    </div>
   
</body>


</html>