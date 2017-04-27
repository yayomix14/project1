@if (Session::has('msj-error'))
    <div class="col-xs-12">
        <div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session::get('msj-error') }}
        </div>
    </div>
@endif