<form action="{{url('/categories')}}" method="post">
  <div class="form-group">
    <label>Category</label>
    <input type="text" placeholder="Category" name="name">
  </div>

  <button type="submit" value="add" class="btn btn-primary">Submit</button>
@csrf
</form>
