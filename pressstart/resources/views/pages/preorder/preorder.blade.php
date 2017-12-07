@extends ('layout.master')

@section ('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Pre-orders
        <small>
          <div class="btn-group pull-right">
            <a href="/preorder/create" class="btn btn-primary">New Pre-order</a>
          </div>
          <div class="input-group pull-right" style="padding-top: 10px;">
            <input type="text" class="form-control" placeholder="Search Pre-orders">
            <span class="input-group-btn">
              <button type="button" class="btn btn-secondary">Search</button>
            </span>
          </div>
        </small>
      </h2>

      <br/>
      <br/>

      <table class="table table-striped">
        <tbody>
          <!-- This will likely become a foreach. This is just for demo purposes -->
          @for ($i = 0; $i < 15; $i++)
          <tr>
            <td>
              <p>Item ID: I190</p>
              <p>Game Title: Far Cry 5</p>
              <p>Price: $79.99</p>
            </td>
            <td>
              <p>Customer ID: C555</p>
              <p>Customer Name: Jane Doe</p>
              <p>Customer Email: jane_doe@email.com</p>
            </td>
            <td>
              <p>Status: Pending Payment</p>
              <p>Owing: $79.99</p>
            </td>
            <td class="text-right">
              <a href="preorder/view" class="btn btn-primary btn-sm btn-block">Update</a>
              <button type="submit" class="btn btn-success btn-sm btn-block">Completed</button>
              <button type="submit" class="btn btn-danger btn-sm btn-block">Cancel</button>
            </td>
          </tr>
          @endfor
        </tbody>
      </table>
    </div>

  </div>
</div>

@endsection