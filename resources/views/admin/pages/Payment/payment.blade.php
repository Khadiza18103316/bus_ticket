@extends('admin.master')
@section('content')

<h3>Payment Details</h3>
<br>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Payment Mathod</th>
      <th scope="col">Transection ID</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach($payment as $detail)
    <tr>
      <td>{{optional($detail->userRelation)->name}}</td>
      <td>{{optional($detail->userRelation)->email}}</td>
      <td>{{$detail->payment_mathod}}</td>
      <td>{{$detail->transaction_id}}</td>
      <td>{{($detail->created_at)->toDateString()}}</td>
      <td>{{($detail->created_at)->toTimeString()}}</td>
      <td>{{$detail->amount}}</td>
     
    </tr>
    @endforeach
</tbody>
</table>
@endsection