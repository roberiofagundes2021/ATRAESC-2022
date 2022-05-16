@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if (Session::has('alert-' . $msg))
    <div class="alert alert-warning alert-dismissible {{ $msg }} fade show" role="alert">
  <strong>carro já agendado!</strong> as datas que você escolheu ja esta agendada no sistema para esse carro retorne e tente novamente com outro carro ou com outra data para o mesmo carro 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
        
    @endif
@endforeach





