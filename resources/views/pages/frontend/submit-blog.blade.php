<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel">Submit Your Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('blog.writter.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="row mb-4" hidden>
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Blog Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="blog_date" value="{{ $today }}" placeholder="Enter here " required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Master Blog Tag </label>
                            <div class="col-sm-9">
                                <select class="form-control js-example-basic-single" name="master_blog_id" required >
                                    <option value="" disabled selected hidden class="text-muted">
                                        Select master blog</option>
                                    @foreach ($masterblogdata as $blogmasters)
                                    <option value="{{ $blogmasters->id }}">{{ $blogmasters->master_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" placeholder="Enter here " required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Quotes</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="quotes" placeholder="Enter here " required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Writer Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="writer_name" placeholder="Enter here " required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Writer Mail Address</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="writer_mail_address" placeholder="Enter here " required>
                            </div>
                        </div>
                        <div class="row mb-4" hidden>
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Writer Web Address</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" name="writer_web_address_address" placeholder="Enter here " required value="https://zworktechnology.com">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Blog Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="blog_image" placeholder="Enter here " required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                Blog Content</label>
                            <div class="col-sm-9">
                                <textarea id="myeditorinstance" type="text" class="form-control" name="blog_content" placeholder="Enter here "></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit now</button>
                </div>
            </form>
        </div>
    </div>
</div>
