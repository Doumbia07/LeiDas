@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100" style="background-color: #111111e1;">
    <div class="w-100" style="max-width: 600px; background-color: rgba(252, 110, 8, 0.913); padding: 40px; border-radius: 12px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h1 class="text-center mb-4" style="color: #333;">Publier un nouvel article</h1>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" id="articleForm">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-label"><i class="fas fa-heading"></i> Titre</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label"><i class="fas fa-align-left"></i> Description</label>
                <textarea name="description" class="form-control" id="description" rows="4" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="city" class="form-label"><i class="fas fa-city"></i> Ville</label>
                <input type="text" name="city" class="form-control" id="city" required>
            </div>
            <div class="form-group mb-3">
                <label for="job" class="form-label"><i class="fas fa-briefcase"></i> Métier</label>
                <input type="text" name="job" class="form-control" id="job" required>
            </div>
            <div class="form-group mb-3">
                <label for="phone" class="form-label"><i class="fas fa-phone-alt"></i> Numéro de téléphone</label>
                <input type="text" name="phone" class="form-control" id="phone" required>
            </div>
            <div class="form-group mb-3">
                <label for="images" class="form-label"><i class="fas fa-images"></i> Images</label>
                <input type="file" name="images[]" class="form-control-file" id="images" multiple onchange="previewImages()">
            </div>
            <div id="preview" class="row mb-3"></div>
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #007bff; border: none;">Publier</button>
        </form>
    </div>
</div>

<script>
    let selectedFiles = [];

    function previewImages() {
        const preview = document.getElementById('preview');
        preview.innerHTML = '';
        const files = document.getElementById('images').files;

        if (files.length === 0) {
            return;
        }

        selectedFiles = Array.from(files);

        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(event) {
                const col = document.createElement('div');
                col.classList.add('col-md-4', 'mb-3', 'position-relative');
                const img = document.createElement('img');
                img.src = event.target.result;
                img.classList.add('img-thumbnail');
                img.style.height = '150px';
                img.style.objectFit = 'cover';
                img.style.cursor = 'pointer';
                img.style.transition = 'transform 0.3s';
                img.onmouseover = function() {
                    img.style.transform = 'scale(1.05)';
                }
                img.onmouseout = function() {
                    img.style.transform = 'scale(1)';
                }
                const btn = document.createElement('button');
                btn.classList.add('btn', 'btn-danger', 'btn-sm', 'position-absolute', 'top-0', 'end-0', 'm-1');
                btn.textContent = '×';
                btn.onclick = function() {
                    removeImage(index);
                }
                col.appendChild(img);
                col.appendChild(btn);
                preview.appendChild(col);
            }
            reader.readAsDataURL(file);
        });
    }

    function removeImage(index) {
        selectedFiles.splice(index, 1);
        document.getElementById('images').files = createFileList(selectedFiles);
        previewImages();
    }

    function createFileList(files) {
        const dataTransfer = new DataTransfer();
        files.forEach(file => dataTransfer.items.add(file));
        return dataTransfer.files;
    }

    document.getElementById('articleForm').onsubmit = function(event) {
        const input = document.getElementById('images');
        input.files = createFileList(selectedFiles);
    }
</script>

<!-- FontAwesome pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection
