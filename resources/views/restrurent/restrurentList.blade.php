@extends('mainStructure')

@section('content')

    <div class="container">
        <span>
            @if (Session::has('sms'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div>
                        {{ Session::get('sms') }}
                    </div>
                </div>
            @endif
        </span>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>List of all Restrurents</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Manager</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($restrurents as $restrurent)
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ $restrurent->name }}</td>
                                        <td>{{ $restrurent->phone }}</td>
                                        <td>{{ $restrurent->address }}</td>
                                        <td>{{ $restrurent->manager_id }}</td>
                                        <td>
                                            <a href="{{ route('UpRestrurentPage', $restrurent->id) }}">
                                                <button class="btn btn-primary" id="action_buttons">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </a>
                                            <a href="{{ route('DeRestrurent', $restrurent->id) }}">
                                                <button class="btn btn-danger" id="action_buttons">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </a>
                                        </td>
                                        @php
                                            $i++;
                                        @endphp
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <span>
                            {{ $restrurents->links() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

<style>
    .container {
        padding: 10px;
    }

    p {
        padding-top: 10px;
    }

    svg {
        max-height: 10px;
    }

    #action_buttons a {
        color: whitesmoke !important;
        text-decoration: none !important;
    }

</style>
