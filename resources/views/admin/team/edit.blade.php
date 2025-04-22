@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0">
                    <h4 class="card-title mb-0">Edit Team Member</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.team.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="name" name="name" value="{{ old('name', $member->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" 
                                id="position" name="position" value="{{ old('position', $member->position) }}" required>
                            @error('position')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" 
                                id="bio" name="bio" rows="4" required>{{ old('bio', $member->bio) }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                id="image" name="image" accept="image/*">
                            <small class="text-muted">Leave empty to keep current image</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="social_links" class="form-label">Social Media Links</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                <input type="url" class="form-control" name="social_links[linkedin]" 
                                    value="{{ old('social_links.linkedin', $member->social_links['linkedin'] ?? '') }}" 
                                    placeholder="LinkedIn URL">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                <input type="url" class="form-control" name="social_links[twitter]" 
                                    value="{{ old('social_links.twitter', $member->social_links['twitter'] ?? '') }}" 
                                    placeholder="Twitter URL">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-github"></i></span>
                                <input type="url" class="form-control" name="social_links[github]" 
                                    value="{{ old('social_links.github', $member->social_links['github'] ?? '') }}" 
                                    placeholder="GitHub URL">
                            </div>
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