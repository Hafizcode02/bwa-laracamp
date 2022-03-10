@extends('layouts.app')

@section('content')
    <div class="container p-4 mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        Update Discount : <strong>{{ $discount->name }}</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.update', $discount->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $discount->id }}">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    value="{{ old('name') ?: $discount->name }}" required />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group mt-4">
                                <label for="code" class="form-label">Code</label>
                                <input type="text" name="code"
                                    class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}"
                                    value="{{ old('code') ?: $discount->code }}" required />
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                            </div>
                            <div class="form-group mt-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" cols="0" rows="2"
                                    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description') ?: $discount->description }}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group mt-4">
                                <label for="discount" class="form-label">Discount Percentage</label>
                                <input type="number" name="percentage"
                                    class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }}" min="1"
                                    max="100" value="{{ old('percentage') ?: $discount->percentage }}" required />
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{ $errors->first('percentage') }}</p>
                                @endif
                            </div>
                            <div class="form-group mt-4 d-flex flex-row-reverse">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
