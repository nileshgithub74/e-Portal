@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="auth-card">
                <div class="card-header text-center py-4">
                    <h2 class="mb-0">Create Account</h2>
                    <p class="text-light mb-0 mt-2">Join our community today</p>
                </div>

                <div class="card-body p-4">
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
                            <label for="name">Full Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
                            <label for="email">Email Address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            <label for="password-confirm">Confirm Password</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#" class="auth-link">Terms of Service</a> and <a href="#" class="auth-link">Privacy Policy</a>
                            </label>
                            @error('terms')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-auth">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center py-3">
                    <p class="mb-0">Already have an account? 
                        <a href="{{ route('login') }}" class="auth-link">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.auth-card {
    background: rgba(255, 255, 255, 0.95);
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.auth-card .card-header {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    padding: 2rem;
}

.auth-card .card-header h2 {
    font-weight: 600;
    color: white;
}

.auth-card .card-body {
    background: white;
}

.form-floating > .form-control {
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 1rem 0.75rem;
}

.form-floating > .form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.1);
}

.form-check-input:checked {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-auth {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    border: none;
    padding: 0.8rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-auth:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.auth-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.auth-link:hover {
    color: var(--secondary-color);
}

.card-footer {
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
}

@media (max-width: 768px) {
    .auth-card {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
    
    .card-header {
        padding: 1.5rem;
    }
    
    .card-body {
        padding: 1.5rem;
    }
}
</style>
@endsection 