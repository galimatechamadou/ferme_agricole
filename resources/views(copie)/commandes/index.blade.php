@extends("layout")
@section("Com_index")

<div class="container">
<br>
<table class="table table-striped">
        <tr>
            <th>#</th>  <th>id</th>   <th>CLIENT</th>  <th>ARTICLE</th>  <th>REFERENCE</th> <th>QUANTITE</th>    <th>DATE</th>  
        </tr>

        @foreach($Commandes as $commande)
            <tr>
                <th>#</th>
                <th>{{$commande->id ?? ''}}</th>
                <th>{{$commande->client ?? ''}}</th>
                <th>{{$commande->article?? ''}}</th>
                <th>{{$commande->reference ?? ''}}</th>
                <th>{{$commande->quantite ?? ''}}</th>
                <th>{{$commande->date ?? ''}}</th>

                <th>
            <a href="Command/create ">Ajouter</a>
                </th>
                
            </tr>

        @endforeach
   </table>
   
   </div>
   @endsection