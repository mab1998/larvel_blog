<html lang="en">
<head>
  <title>Laravel Multiple File Upload Example</title>
	<script src="{{ asset('js/jquery-3.4.1.js') }}" defer></script>
	<link href = {{ asset("css/bootstrap.css") }} rel="stylesheet" />
</head>
<body>
  
  <div class="container">
       
    <h3 class="jumbotron">Laravel Multiple File Upload</h3>
<form method="post" action="{{url('file')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control" multiple>
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
  
  
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
	  
	   @if(session('success'))
		   <div class="alert alert-success">
			  {{ session('success') }}
		   </div> 
		 @endif
  
  <script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

</body>
</html>
