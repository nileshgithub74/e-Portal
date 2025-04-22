@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-4 fw-bold mb-0">Contact Messages</h1>
            <p class="text-muted">Manage and respond to customer inquiries</p>
        </div>
    </div>

    <!-- Filters -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('contact.messages') }}" method="GET" class="row g-3">
                <div class="col-md-4">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="">All Messages</option>
                        <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>Unread</option>
                        <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>Read</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="sort" class="form-label">Sort By</label>
                    <select class="form-select" id="sort" name="sort">
                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest First</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-filter me-2"></i>Apply Filters
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Messages List -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="border-0">Status</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Message</th>
                            <th class="border-0">Date</th>
                            <th class="border-0">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $message)
                            <tr>
                                <td>
                                    @if($message->read)
                                        <span class="badge bg-success">Read</span>
                                    @else
                                        <span class="badge bg-danger">New</span>
                                    @endif
                                </td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ Str::limit($message->message, 50) }}</td>
                                <td>{{ $message->created_at->format('M d, Y H:i') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-primary" 
                                            data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        @if(!$message->read)
                                            <form action="{{ route('contact.mark-read', $message->id) }}" 
                                                method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-success">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>

                            <!-- Message Modal -->
                            <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Message from {{ $message->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <strong>From:</strong> {{ $message->name }} ({{ $message->email }})
                                            </div>
                                            <div class="mb-3">
                                                <strong>Date:</strong> {{ $message->created_at->format('F d, Y H:i') }}
                                            </div>
                                            <div class="mb-3">
                                                <strong>Message:</strong>
                                                <p class="mt-2">{{ $message->message }}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="mailto:{{ $message->email }}" class="btn btn-primary">
                                                <i class="fas fa-reply me-2"></i>Reply
                                            </a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <div class="text-muted">
                                        <i class="fas fa-inbox fa-2x mb-3"></i>
                                        <p class="mb-0">No messages found</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if($messages->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $messages->links() }}
        </div>
    @endif
</div>

<style>
.table > :not(caption) > * > * {
    padding: 1rem;
}

.badge {
    padding: 0.5em 0.75em;
}

.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
</style>
@endsection 