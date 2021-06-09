@extends('admin.admin-master')
@section('feedback') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Feedbacks</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12"> 
                <div class="sl-page-title">
                  <h5 style="text-align:center;">User Feedbacks</h5>
                </div><!-- sl-page-title -->

                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Sl No</th>
                                    <th class="wd-15p">Name</th>
                                    <th class="wd-15p">Contact</th>
                                    <th class="wd-15p">Email</th>
                                    <th class="wd-10p">Message</th>
                                    <th class="wd-10p">Sent Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $contact->user_name }}</td>
                                    <td>{{ $contact->user_contact }}</td>
                                    <td>{{ $contact->user_email }}</td>
                                    <td>{{ $contact->user_message }}</td>
                                    <td>
                                        @if($contact->created_at==NULL)
                                        <span class="text-danger">No Time Set</span>
                                        @else
                                        {{$contact->created_at->diffForHumans()}}
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>
        </div>
    </div>
</div>
@endsection