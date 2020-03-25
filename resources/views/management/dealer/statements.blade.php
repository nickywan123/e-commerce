@extends('layouts.management.main')

@section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Month</th>
        <th scope="col">Statements</th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>January</td>
        <td><a href="/management/statement" target="_blank" rel="noopener noreferrer">Statement A</a></td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>February</td>
        <td><a href="/management/statement" target="_blank" rel="noopener noreferrer">Statement B</a></td>
        
      </tr>
     
    </tbody>
  </table>
@endsection