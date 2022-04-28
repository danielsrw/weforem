<div class="col-md-12">
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($clients as $client)
                        <tr>
                            <td>
                                {{ $client['name'] }}
                            </td>
                            <td>
                                <img src="/storage/{{ $client['image'] }}" class="rounded-circle" style="width: 50px" />
                            </td>
                            <td>
                                <a href="{{ $client['link'] }}">
                                    {{ $client['link'] }}
                                </a>
                            </td>
                            <td>
                                <input type="hidden" name="status" value="{{ $client->status }}">
                                @if ($client->status == 1)
                                    <a href="{{ route('nexcode.admin.client.active', $client->id) }}">
                                        <button type="submit" class="badge bg-label-success border-0 me-1">
                                            Active
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('nexcode.admin.client.unactive', $client->id) }}">
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