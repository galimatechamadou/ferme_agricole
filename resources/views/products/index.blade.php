@extends("layout")
@section("Product_index")
<table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom Produit</th>  <th>Prix Produit</th>    <th>Quantite</th>        <th>Ajouter</th><th>Modifier</th>
       </tr>
       
       @foreach($products as $product)
       
       
   <tr>
       <th>#</th>
            <th>{{$product->name ?? ''}}</th>
            <th>{{$product->price ?? ''}} </th>
            <th>{{$product->quantity ?? ''}} </th>

            <th>
            <a href="Product/create ">Ajouter</a>
            </th>
       <th>
  <p><a href="{{route('update_produit',['id'=>$product->id])}}">Editer</a></p>
       </th>
       
   </tr>
@endforeach

</table>
        </div>

   

