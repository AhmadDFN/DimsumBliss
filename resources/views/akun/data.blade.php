@extends('template.template')

@section('title', $data->title)
@section('page-title', $data->page)

@section('content')
    <div class="bg-warning rounded">
        @if (session('text'))
            <div class="alert alert-{{ session('type') }} text-center" style="width: 300px;" role="alert">
                {{ session('text') }}
            </div>
        @endif
    </div>
    <div class="col-12">
        <div class="rounded p-4 bg-warning" style="min-height: 65vh;">
            <a href="{{ url('akun/create') }}"><button class="button-73 mb-2" id="tambahdata" role="button">Tambah
                    {{ $data->page }}</button></a>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-warning">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th>{{ $item->username }}</th>
                                <td>
                                    <form action="{{ url($routes->index . @$item->id) }}" method="post"
                                        id="{{ 'delete-form-' . @$item->id }}">
                                        <a href="{{ url($routes->index . @$item->id . '/edit') }}"><i
                                                class="text-warning fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-transparent mt-0"><i
                                                class="text-danger fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
