@extends('layouts.master')

@section('title')
    Invoice
@endsection

@php
    use App\Models\User;
    use App\Models\Taskuser;
    use App\Models\Invoice;
    $invoices = Invoice::all();
@endphp

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title"> Invoice Liste</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th class="text-dark" style="font-weight:600">Id</th>
                            <th class="text-dark" style="font-weight:600">Users</th>
                            <th class="text-dark" style="font-weight:600">Date</th>
                            <th class="text-dark" style="font-weight:600">Status</th>
                        </thead>
                     
                    <tbody>
                        @foreach ($invoices as $row)
                        <tr class="">
                          <td>{{$row->id}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->date}}</td>                          
                          <td style="color:#46DCBE; font-weight:500 ;font-size:15px">
                                <select name="" id="">
                                    <option value="">Paid</option>
                                    <option value="">Pending</option>
                                </select>
                          </td>
                            <td>
                                <a href="/invoice-view/{{$row->id}}" class="btn btn-success">View <i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection

