@extends('layout.master')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Creation d'èvenement</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">évenement</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">créer</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Elements</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 d-flex flex-column align-items-center">
                                <!-- Aperçu de l'image avec une image par défaut -->
                                <div class="form-group">
                                    <label>Aperçu de l'image</label><br>
                                    <img id="imagePreview" src="assets/img/event.jpg" alt="Aperçu de l'image"
                                        style="width: 200px; height: auto;" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image de l'évènement</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                        onchange="previewImage(event)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email2">Titre de l'évènement</label>
                                    <input type="email" class="form-control" id="email2" placeholder="titre" />
                                </div>

                                <div class="form-group">
                                    <label for="defaultSelect">Catégorie</label>
                                    <select class="form-select form-control" id="defaultSelect">
                                        <option>Autre</option>
                                        <option>Concert-Spectacle</option>
                                        <option>Diner Gala</option>
                                        <option>Festival</option>
                                        <option>Formation</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="email2">Description</label>
                                    <input type="email" class="form-control" id="email2" placeholder="description" />
                                </div>
                                
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="email2">Date de l'évènement</label>
                                    <input type="date-time" class="form-control" id="email2" placeholder="date" />
                                </div>

                                <div class="form-group">
                                    <label for="email2">Ville</label>
                                    <input type="email" class="form-control" id="email2" placeholder="ville" />
                                </div>

                                <div class="form-group">
                                    <label for="email2">Adresse</label>
                                    <input type="email" class="form-control" id="email2" placeholder="Adresse" />
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();

            reader.onload = function() {
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
