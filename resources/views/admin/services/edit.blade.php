@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0">
                    <h4 class="card-title mb-0">Edit Service</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="form-label">Service Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                id="title" name="title" value="{{ old('title', $service->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                id="description" name="description" rows="4" required>{{ old('description', $service->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="icon" class="form-label">Icon Class (FontAwesome)</label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                                id="icon" name="icon" value="{{ old('icon', $service->icon) }}" required>
                            <small class="text-muted">Example: fas fa-cog</small>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="features" class="form-label">Features (One per line)</label>
                            <textarea class="form-control @error('features') is-invalid @enderror" 
                                id="features" name="features" rows="4">{{ old('features', $service->features) }}</textarea>
                            <small class="text-muted">Enter each feature on a new line</small>
                            @error('features')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 