@extends('admin.layouts.app')
@section('title', $title)
@section('content')
	<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách</h3>

          <div class="card-tools">
          	<a href="{{ url('admin/roles/create') }}" class="btn btn-block btn-info btn-sm add-role">Thêm mới</a>
            <a href="{{ url('admin/roles') }}" class="btn btn-block btn-default btn-sm add-role">Tải lại</a>
            
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects center">
              <thead>
                  <tr>
                      <th style="width: 2%">
                          STT
                      </th>
                      <th style="width: 68%">
                          Tên
                      </th>
                     
                      <th style="width: 21%;" class="text-center">Thao tác
                      </th>
                  </tr>
              </thead>
              <tbody>
                @if(!$roles->isEmpty())
                  @foreach($roles as $role)
                    <tr>
                        <td class="text-center">
                            {{ $no++ }}
                        </td>
                        <td>
                            <a>
                                {{ $role->name }}
                            </a>
                            
                        </td>
                        
                        <td class="project-actions text-right">
                           
                            <a class="btn btn-info btn-sm" href="{{ url('admin/roles/'.$role->id.'/edit') }}" title="Sửa">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a href="javascript:;" class="btn btn-danger btn-sm" data-toggle="modal" 
                              data-target="#modal" onclick="deleteModal('{{$role->id}}','admin/roles/{{$role->id}}')" title="Xóa"><i class="fas fa-trash">
                                </i>
                                Xóa
                              </a>
                            
                        </td>
                    </tr>
                  @endforeach  
                @else
                  <tr>
                      <td colspan="3">{{trans('Không có dữ liệu')}}</td>
                  </tr>
                @endif
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    @include('admin.layouts.delete')
@stop