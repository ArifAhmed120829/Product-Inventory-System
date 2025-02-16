<form action="{{ route('product_inventory.store') }}" method="POST">
   @csrf
   <input type = "text" name = "product_name" placeholder="Enter text">
   <input type = "text" name = "category" placeholder= "Enter text">
   <input type = "number" name = "price" placeholder= "Enter number">
   <button type = "submit"> Submit </button>
</form>
