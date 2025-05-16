@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="fw-bold text-center">{{ __('FORM DOSEN') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> NIDN </label>
                            <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Email </label>
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button href="" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
