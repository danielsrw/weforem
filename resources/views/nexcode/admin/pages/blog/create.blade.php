<div class="col-lg-8 col-md-6">
    <div class="mt-3">
        <div class="modal fade" id="createBlog" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createBlogTitle">Add Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('nexcode.admin.blog.store') }}" method="POST" class="modal-body" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Blog Title</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-star"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="title"
                                        placeholder="Blog Title"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label class="form-label">Blog Author</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-user"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="author"
                                        placeholder="Blog Author"
                                    />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label">Blog Image</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-image"></i>
                                    </span>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="image"
                                        placeholder="Blog Image"
                                    />
                                </div>
                                <input type="hidden" name="status" value="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Blog textarea</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-message"></i>
                                    </span>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Add Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
