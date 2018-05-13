<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}}</title>

     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/ckeditor.js')}}"</script>
    <script src="{{asset('assets/js/bootstrap-filestyle/src/bootstrap-filestyle.min.js')}}"></script>
    <!-- Custom styles for this template -->

  </head>

  <body>
      <header id="header_wrapper">
        @yield('header')

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('status'))
        <div class="alert alert-success">      
            {{session('status')}}</li    
        </div>
        @endif
        
    </header>
        
      @yield('content')
    
    <!-- Bootstrap core JavaScript --> 
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>

</html>

