<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head> 
<body>
  <div class="container">
    <h1>Thêm Người Dùng</h1>

    {!! Form::open(['url' => 'users/store', 'method' => 'POST']) !!}
      
      <div class="form-group"> 
        {!! Form::label('username', 'Tên đăng nhập') !!} 
        {!! Form::text('username', '', ['class'=>'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('email', 'Email') !!} 
        {!! Form::email('email', '', ['class'=>'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('password', 'Mật khẩu') !!} 
        {!! Form::password('password',['class' => 'form-control']) !!}
      </div>
       
      
      <div class="form-group">
        {!! Form::label('city', 'Thành Phố') !!} 
        {!! Form::select('city', [1 => 'Ha Noi', 2 => 'TPHCM', 3 => 'Đà Nắng', 4 => 'Huế'], ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('gender', '--Giới tính') !!} 
        <div class="form-check">
          {!! Form::radio('gender', 'male', 'checked', ['class' => 'form-check-input', 'id' => 'male']) !!} 
          {!! Form::label('male','Nam', ['class' => 'form-check-label']) !!}          
        </div> 
        <div class="form-check">
          {!! Form::radio('gender', 'female', '', ['class' => 'form-check-input', 'id' => 'female']) !!} 
          {!! Form::label('female','Nữ', ['class' => 'form-check-label']) !!}          
        </div> 
      </div>
      <div class="form-group">
        {!! Form::label('birth', 'Ngày sinh') !!} 
        {!! Form::date('birth','', ['class' => 'form-control']) !!}
      </div>
      
      
      
      
      
      
      
      <br>
      <div class="form-group"> 
        {!! Form::submit('Thêm mới', ['name' => 'sm-add', 'class' => 'btn btn-primary']) !!}
      </div>
      

    {!! Form::close() !!} 

  </div>

 
</body>
</html>