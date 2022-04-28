<div class="col-lg-6 col-md-6">
    <div class="mt-3">
        <div class="modal fade" id="createSlide" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createSlideTitle">Add Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('nexcode.admin.slide.store') }}" method="POST" class="modal-body" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="slideTitle" class="form-label">Slide Title</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="slideTitle"
                                    name="title"
                                    placeholder="Slide Title"
                                />
                            </div>
                            <div class="col mb-0">
                                <label for="slideSubTitle" class="form-label">Slide Subtitle</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="slideSubTitle"
                                    name="subtitle"
                                    placeholder="Slide Subtitle"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-0">
                                <label for="slideImage" class="form-label">Slide Image</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="slideImage"
                                    name="image"
                                    placeholder="Slide Image"
                                />
                                <input type="hidden" name="status" value="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-0">
                                <label for="slideDescription" class="form-label">Slide textarea</label>
                                <textarea class="form-control" name="description" id="slideDescription" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Add Slide</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>