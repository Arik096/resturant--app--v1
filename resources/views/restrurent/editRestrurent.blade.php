@extends('mainStructure')

@section('content')
    <div class="container" style="padding: 30px;">
        <div class="row" style="display: flex; justify-content:center;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Update Restrurent</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('UpRestrurent') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" id="id" placeholder=""
                                    value="{{ $restrurent[0]->id }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Restrurent Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter the name of the restrurent" value="{{ $restrurent[0]->name }}"
                                    required>
                            </div>
                            <span>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone" id="phone"
                                    placeholder="Enter the phone number of the restrurent"
                                    value="{{ $restrurent[0]->phone }}" required>
                            </div>
                            <span>
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="address" class="form-label">Restrurent Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Enter the address of the restrurent"
                                    value="{{ $restrurent[0]->address }}" required>
                            </div>
                            <span>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <div class="mb-3">
                                <label for="manager_id" class="form-label">Enter Manager ID</label>
                                <input type="number" class="form-control" name="manager_id" id="manager_id"
                                    placeholder="Enter the Manager ID of the restrurent"
                                    value="{{ $restrurent[0]->manager_id }}" required>
                            </div>
                            <span>
                                @error('manager_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </span>
                            <button type="submit" class="btn btn-primary">Update Restrurent</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
