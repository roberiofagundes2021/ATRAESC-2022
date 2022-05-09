<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<form action="{{route('contrato.store')}}" method="post">
		 @csrf
         
         <input type="text" name="empresa_id" value="{{$empresa->id}}">

		<input type="text" name="endereco_empresa_id" value="{{$enderecoEmpresa}}">

		<input type="text" name="agendamento_3_dias_id" value="{{$agendamento_3_dias->id}}">

		<input type="text" name="automovel_id" value="{{$automovel}}">


        <button type="submit" class="btn btn-primary">adicionar</button>

                            
    </form>
</body>
</html>