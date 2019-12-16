<form action="{{url('/cities')}}" method="post">
  <div class="form-group">
    <label>City</label>
    <input type="text" placeholder="City" name="name">
  </div>

  <button type="submit" value="add" class="btn btn-primary">Submit</button>
@csrf
</form>