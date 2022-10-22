@extends('superuser.app')
@section('content')

<main class="ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>
            {{ __('Payment') }}
        </h2>
    </div>
    <div class="table-responsive">

        @foreach ($SUPaymentAll as $SUPayment)

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Download</th>
                    <th scope="col">Confirmation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $SUPayment->nama_lengkap}}</td>
                    <td>
                        <div class="w-20 h-20 mask mask-hexagon">
                            <img src="{{ asset('storage/' . $SUPayment->payment) }}">
                        </div>
                    </td>
                    <td>{{ $SUPayment->confirmation }}</td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>

</main>
@endsection