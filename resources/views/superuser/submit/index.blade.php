@extends('superuser.app')

@section('content')

<main class="ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>
            {{ __('Submit') }}
        </h2>
    </div>
    <div class="table-responsive">

        @foreach ($uploadAll as $column)

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">File</th>
                    <th scope="col">Status</th>
                    <th scope="col">Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $column->nama_lengkap}}</td>
                    <td>{{ $column->email}}</td>
                    <td>
                        <div class="w-20 h-20 mask mask-hexagon">
                            <img src="{{ asset('storage/' . $column->fileName) }}">
                        </div>
                    </td>
                    <td>{{ $column->confirmation }}</td>
                    <td class="align-baseline">
                    <td>
                        <form action="{{ route('superuser.submit.download') }}" method="GET" style="display: inline" class="">
                            @csrf
                            @method('POST')
                            <div class="ml-5">
                                <button type="submit" class="btn btn-sm btn-success">
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>
                        </form>
                    </td>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>


</main>

@endsection