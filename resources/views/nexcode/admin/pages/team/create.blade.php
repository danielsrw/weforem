<div class="col-lg-8 col-md-6">
    <div class="mt-3">
        <div class="modal fade" id="createMember" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createMemberTitle">Add Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('nexcode.admin.member.store') }}" method="POST" class="modal-body" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label class="form-label">Member Name</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-user"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Member Name"
                                    />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label">Member Title</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-star"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="title"
                                        placeholder="Member Title"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="MemberImage" class="form-label">Member Image</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-image"></i>
                                    </span>
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="MemberImage"
                                        name="image"
                                        placeholder="Member Image"
                                    />
                                </div>
                                <input type="hidden" name="status" value="0">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bxl-twitter"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="twitter"
                                        placeholder="Twitter"
                                    />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bxl-facebook"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="facebook"
                                        placeholder="Facebook"
                                    />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bxl-linkedin"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="linkedin"
                                        placeholder="LinkedIn"
                                    />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bxl-google"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="google"
                                        placeholder="Gmail"
                                    />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bxl-instagram"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="instagram"
                                        placeholder="Instagram"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Member textarea</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i class="bx bx-message"></i>
                                    </span>
                                    <textarea class="form-control" name="desc" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Add Member</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>