@extends("layouts.layout")
@section("Com_create")
<div class="container">

       <div><h1>{{__('Enregistrement d\'une commande')}}</h1></div>

                <form action="{{route('Command.store')}}" method="post">
                    @csrf
                    <div class="row-6">
                        <input type="text" name="client" class="form-control" placeholder="CLIENT">
                    </div>
                    
                    <div class="row-6">
                
                        <input type="text" name="article" class="form-control" placeholder="ARTICLE">
                    </div>
                    <div class="row-6">
                        <input type="text" name="reference" class="form-control" placeholder="REFERENCE">
                    </div>
                    <div class="row-6">
                        <input type="text" name="quantite" class="form-control" placeholder="QUANTITE">
                    </div>
                    <div class="row-6">
                        <input type="date" name="date" class="form-control" placeholder="DATE">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

</div>
      @endsection