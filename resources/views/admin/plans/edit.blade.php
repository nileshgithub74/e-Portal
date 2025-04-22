@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0">
                    <h4 class="card-title mb-0">Edit Pricing Plan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.plans.update', $plan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="form-label">Plan Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="name" name="name" value="{{ old('name', $plan->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                    id="price" name="price" value="{{ old('price', $plan->price) }}" 
                                    step="0.01" min="0" required>
                            </div>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="duration" class="form-label">Duration</label>
                            <select class="form-select @error('duration') is-invalid @enderror" 
                                id="duration" name="duration" required>
                                <option value="monthly" {{ old('duration', $plan->duration) == 'monthly' ? 'selected' : '' }}>
                                    Monthly
                                </option>
                                <option value="yearly" {{ old('duration', $plan->duration) == 'yearly' ? 'selected' : '' }}>
                                    Yearly
                                </option>
                            </select>
                            @error('duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="features" class="form-label">Features</label>
                            <textarea class="form-control @error('features') is-invalid @enderror" 
                                id="features" name="features" rows="6" required>{{ old('features', $plan->features) }}</textarea>
                            <small class="text-muted">Enter each feature on a new line</small>
                            @error('features')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input @error('is_popular') is-invalid @enderror" 
                                    id="is_popular" name="is_popular" value="1" 
                                    {{ old('is_popular', $plan->is_popular) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_popular">Mark as Popular Plan</label>
                            </div>
                            @error('is_popular')
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