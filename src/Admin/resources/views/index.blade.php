<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> new document </title>
    <meta name="generator" content="editplus" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
</head>

<body>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                {{-- Add Button --}}
                <div class="pull-right box-tools">
                    <a href="{{ url('auth/groups/create') }}">
                        <span class="box-btn"><i class="fa fa-plus"></i></span>
                    </a>
                </div>

                {{-- Title --}}
                <h3 class="box-title"><i class="fontello-doc"></i>
                    <span>人员管理列表</span>
                </h3>
            </div>

            {{-- Table --}}
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>序号</th>
                            <th>名称</th>
                            <th>邮箱</th>
                            <th>密码</th>
                        </tr>
                        @foreach($personnels as $key => $item)
                            <tr>
                                <td>{{ ($key + 1) + ($personnels->currentPage() - 1) * $personnels->perPage() }}</td>
                                <td><strong>{{ $item->name }}</strong></td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->password }}</td>
                                <td>
                                    {{-- Edit --}}
                                    <a href="javascript:void(0);">
                                        <i class="fontello-edit" title="编辑"></i>
                                    </a>

                                    {{-- Delete --}}
                                    <a href="javascript:void(0);" onclick="itemDelete('{{ $item->id }}',
                                            '{{ url("auth/groups/$item->id") }}',
                                            '{{ csrf_token() }}');">
                                        <i class="fontello-trash-2" title="删除"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{-- Paginaton --}}
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="pull-right">
                                {{ $personnels->appends(Request::except('page'))->links() }}
                            </div>
                        </div>
                    </div>
                    {{-- Paginaton End --}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

