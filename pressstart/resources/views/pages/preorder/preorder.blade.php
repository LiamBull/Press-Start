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
      @foreach ($preorders as $preorder)
      <tr>
        <td>
          <p>Item ID: {{ $preorder->item_id }}</p>
          <p>Game Title: {{ App\Item::where('id', $preorder->item_id)->value('itemName') }} </p>
          <p>Price: {{ App\Item::where('id', $preorder->item_id)->value('price') }}</p>
      </td>
      <td>
          <p>Customer ID: {{ $preorder->customer_id }}</p>
          <p>Customer Name: {{ App\Customer::where('id', $preorder->customer_id)->value('firstName') }}&nbsp;{{ App\Customer::where('id', $preorder->customer_id)->value('lastName') }}</p>
          <p>Customer Email: {{ App\Customer::where('id', $preorder->customer_id)->value('email') }}</p>
      </td>
      <td>
          <p>Status: {{ $preorder->status }}</p>
          <p>Balance: {{ $preorder->balance }}</p>
      </td>
      <td class="text-right">
          <a href="/preorder/{{ $preorder->id }}/complete" class="btn btn-success btn-sm btn-block">Complete</a>
          <a href="/preorder/{{ $preorder->id }}/delete" class="btn btn-danger btn-sm btn-block">Cancel</a>
      </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>

</div>
</div>

@endsection