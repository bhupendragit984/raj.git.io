@extends('admin.layouts.admin')

@section('title', __('views.admin.company.index.title'))

@section('content')


    <div class="row">

    
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>@sortablelink('email', __('views.admin.company.index.table_header_01'))</th>
                <th>@sortablelink('phone', __('views.admin.company.index.table_header_11'))</th>
                <th>@sortablelink('company_name', __('views.admin.company.index.table_header_21'))</th>
                <th>@sortablelink('furstname', __('views.admin.company.index.table_header_31'))</th>
                <th>@sortablelink('lastname', __('views.admin.company.index.table_header_41'))</th>
                <th>@sortablelink('address', __('views.admin.company.index.table_header_51'))</th>
                <th>@sortablelink('accept_payment', __('views.admin.company.index.table_header_61'))</th>
            
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($get_data as $company)
                <tr>
                
                    <td>{{ ucfirst($company->email) }}</td>
                    <td>{{ ucfirst($company->phone) }}</td>
                    <td>{{ ucfirst($company->company_name) }}</td>
                    <td>{{ ucfirst($company->first_name)}}</td>
                    <td>{{ ucfirst($company->last_name)}}</td>
                    <td>{{ ucfirst($company->address) }}</td>
                    <td>{{ ucfirst($company->accept_payments) }}</td>
                    
                   
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.company.edit',$company->id)}}" data-toggle="tooltip" data-placement="top" data-title="edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{ route('admin.delete',$company->id)}}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                                <i class="fa fa-trash"></i>
                            </a>
                      
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
         
        </div>
    </div>
@endsection
