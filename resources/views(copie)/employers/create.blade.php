@extends("layout")
@section("Employ_create")

            
        <div class="container">
            <div><h1>{{__('Enregistrement d\'un employer')}}</h1></div>
                <form action="{{route('Employ.store')}}" method="post">
                    @csrf
                    <div>
                        <input type="text" name="matricule" class="form-control" placeholder="MATRICULE">
                    </div>
                    <div>
                        <input type="text" name="nom" class="form-control" placeholder="NOM">
                    </div>
                    <div>
                        <input type="text" name="prenom" class="form-control" placeholder="PRENOM">
                    </div>
                    <div>
                        <input type="text" name="adresse" class="form-control" placeholder="ADRESSE">
                    </div>
                    <div>
                        <input type="text" name="telephone" class="form-control" placeholder="TELEPHONE">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

        </div>
@endsection

