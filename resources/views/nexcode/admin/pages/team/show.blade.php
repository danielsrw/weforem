<div class="col-md-12">
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($team as $member)
                        <tr>
                            <td>
                                {{ $member['name'] }}
                            </td>
                            <td>
                                {{ $member['title'] }}
                            </td>
                            <td>
                                <img src="/storage/{{ $member['image'] }}" class="rounded-circle" style="width: 50px;" />
                            </td>
                            <td>
                                <input type="hidden" name="status" value="{{ $member->status }}">
                                @if ($member->status == 1)
                                    <a href="{{ route('nexcode.admin.member.active', $member->id) }}">
                                        <button type="submit" class="badge bg-label-success border-0 me-1">
                                            Active
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('nexcode.admin.member.unactive', $member->id) }}">
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
                                        <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editSlide">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </span>
                                        <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteSlide">
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

