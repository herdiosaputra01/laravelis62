@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    {{ session('success') }}<i class="fa-solid fa-check"></i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="float-start fw-bold">{{ __('DATA DOSEN') }}</h3>
                    <span class="float-end btn btn-primary">
                        <a class="text-light" href="dosen/add"> <i class="fa-solid fa-user-plus"></i> Add </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">EMAIL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>1937146</td>
                            <td>Maulian Saputra</td>
                            <td>mauliansaputra@gmail.com</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>9714082</td>
                            <td>Hadi Saputra</td>
                            <td>hadisaputra@gmail.com</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>018624139</td>
                            <td>Ismanuddin</td>
                            <td>ismanuddin@gmail.com</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>08235624139</td>
                            <td>Susilawati Yahya</td>
                            <td>susliwatiyahya@gmail.com</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>096624139</td>
                            <td>Rita Warni</td>
                            <td>ritawarni@gmail.com</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    });
</script>



@endsection
