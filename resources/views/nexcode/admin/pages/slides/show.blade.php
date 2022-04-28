<div class="col-md-12">
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($slides as $slide)
                        <tr>
                            <td>
                                {{ $slide['title'] }}
                            </td>
                            <td>
                                {{ $slide['subtitle'] }}
                            </td>
                            <td>
                                <img src="/storage/{{ $slide['image'] }}" alt="Avatar" style="width: 100px" />
                            </td>
                            <td>
                                <input type="hidden" name="status" value="{{ $slide->status }}">
                                @if ($slide->status == 1)
                                    <a href="{{ route('nexcode.admin.slide.active', $slide->id) }}">
                                        <button type="submit" class="badge bg-label-success border-0 me-1">
                                            Active
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('nexcode.admin.slide.unactive', $slide->id) }}">
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
</div>

@include('nexcode.admin.pages.slides.edit')

@include('nexcode.admin.pages.slides.delete')