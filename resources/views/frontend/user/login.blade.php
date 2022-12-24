@if($errors->any())
    <h1 style="color:blue; background:red">
        {{$errors->first()}}
    </h1>
@endif

<form method="post" action="{{route('login')}}">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
