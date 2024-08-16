<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
<div class="container">
   
    
<hr>





    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Demande d'accès a l'api</h4>
            <p class="divider-text">
                <span class="bg-light"></span>
            </p>
            <form action="{{ route('api.request.store') }}" method="POST">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="last_name" class="form-control" placeholder="Nom" type="text">
                </div> 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="first_name" class="form-control" placeholder="Prénom" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <input name="company" class="form-control" placeholder="Entreprise" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                </div> 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-city"></i> </span>
                    </div>
                    <input name="city" class="form-control" placeholder="Ville" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker-alt"></i> </span>
                    </div>
                    <input name="address" class="form-control" placeholder="Adresse" type="text">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Envoyer la demande</button>
                </div>
            </form>            
        </article>
    </div> <!-- card.// -->

</div>
<!--container end.//-->
