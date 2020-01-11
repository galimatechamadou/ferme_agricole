@extends("layouts.layout")
@section("sect_create_mat")


<div class="container ">
    <div class="row justify-content-center">
    <div class="col-8">
            <h1>test</h1>
            <div><h1>{{__('Enregistrement d\'un employer')}}</h1></div>
                <form action="{{route('Employ.store')}}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="matricule" class="form-control"  required placeholder="MATRICULE">
                    </div>
                    <div>
                        <input type="text" name="nom" class="form-control"required placeholder="NOM">
                    </div>
                    <div>
                        <input type="text" name="prenom" class="form-control"required placeholder="PRENOM">
                    </div>
                    <div>
                        <input type="text" name="adresse" class="form-control"required placeholder="ADRESSE">
                    </div>
                    <div>
                        <input type="text" name="telephone" class="form-control"required placeholder="TELEPHONE">
                    </div>
             
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
    </div>
    </div>
        </div>


@endsection