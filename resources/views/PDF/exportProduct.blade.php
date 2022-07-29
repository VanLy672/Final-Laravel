<div class="space50">&nbsp;</div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Unit_price</th>
      <th scope="col">Promotion_price</th>
      <th scope="col">Unit</th>
      <th scope="col">New</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <th><img src="source/image/product/{{$product->image}}" alt="image" style="height: 100px;" /></th>
      <td>{{$product->name}}</td>
      <td>{{$product->id_type}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->unit_price}}</td>
      <td>{{$product->promotion_price}}</td>
      <td>{{$product->unit}}</td>
      <td>{{$product->new}}</td>
      <td>
          @csrf
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
<div class="space50">&nbsp;</div>
</div>
