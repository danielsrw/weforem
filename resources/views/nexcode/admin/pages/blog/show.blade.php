<div class="col-md-12">
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>
                                {{ $blog['name'] }}
                            </td>
                            <td>
                                <img src="/storage/{{ $blog['image'] }}" alt="Avatar" style="width: 100px" />
                            </td>
                            <td>
                                <input type="hidden" name="status" value="{{ $blog->status }}">
                                @if ($blog->status == 1)
                                    <a href="{{ route('admin.client.active', $blog->id) }}">
                                        <button type="submit" class="badge bg-label-success border-0 me-1">
                                            Active
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('admin.client.unactive', $blog->id) }}">
                                        <button type="submit" class="badge bg-label-danger border-0 me-1">
                                            Unactive
                                        </button>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editClient">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </span>
                                        <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteClient">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
