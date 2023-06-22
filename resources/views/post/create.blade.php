@extends('layouts.main')
@section('body')
    <div class="d-flex justify-content-center">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="card-title">Buat Artikel</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Buat artikel anda dengan baik</h6>
                <div class="row">
                    <form method="POST" action="/posts" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Masukan title">
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Simpan">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
