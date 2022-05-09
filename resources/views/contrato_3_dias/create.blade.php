<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <form action="" method="post"             enctype="multipart/form-data">
               @if($errors->any())
                        <div class="alert alert-danger">
                       
                            @foreach($errors->all() as $error)

                                <label>{{$error}}</label><br>
                            @endforeach
                        
                        </div>

                    @endif
                @csrf
                <div class="mb-3">
                    
                    <input type="text" name="automovel_id" value="{{$enderecoEmpresa->rua}}"><br><br>

                   



                    <button type="submit" class="btn btn-primary">avançar</button>

                            
                    </div>
                  
                </div><br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    
                </div>
            </form>
</body>
</html>