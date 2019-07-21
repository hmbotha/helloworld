@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of customers</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                        <th>Name</th>
                        <th>Telephone</th>
                        </tr>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->telephone}}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
