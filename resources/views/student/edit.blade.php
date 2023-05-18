@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2>Edit Data</h2>
                    <form>
                        <div class="mb-3">
                          <label  class="form-label">Name</label>
                          <input type="text" name='name' class="form-control">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">Phone Number</label>
                          <input type="number" name='course' class="form-control">
                        </div>
                        <div class="mb-3">
                          <label  class="form-label">E-mail</label>
                          <input type="text" name='class' class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    {{ __('Edit Page') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
