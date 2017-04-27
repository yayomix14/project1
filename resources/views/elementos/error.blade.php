@if (isset($errors) && count($errors) > 0)
    <div class="col-xs-12">
        <div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
    </div>
@endif
