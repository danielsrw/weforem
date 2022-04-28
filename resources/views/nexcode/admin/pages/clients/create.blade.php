<div class="col-lg-6 col-md-6">
    <div class="mt-3">
        <div class="modal fade" id="createClient" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createClientTitle">Add Client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('nexcode.admin.client.store') }}" method="POST" class="modal-body" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label class="form-label">Client Name</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-user"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Client Name"
                                    />
                                </div>
                            </div>
                            <div class="col mb-0">
                                <label class="form-label">Client Link</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-link"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="link"
                                        placeholder="Client Link"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-0">
                                <label for="ClientImage" class="form-label">Client Image</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-image"></i>
                                    </span>
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="ClientImage"
                                        name="image"
                                        placeholder="Client Image"
                                    />
                                </div>
                                <input type="hidden" name="status" value="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Add Client</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>