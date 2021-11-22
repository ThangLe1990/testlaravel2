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
<h1>Danh sách bài viết</h1>
<div  >
<ul>
  @foreach ($posts as $post)
    <li>
      Tiêu đề: <a href="">{{ $post -> title }}</a><br>
      Nội dung: <p>{{ $post -> content }}</p>
    </li>  
  @endforeach
</ul>

</div>

{{ $posts->links() }}
 











</body>
</html>