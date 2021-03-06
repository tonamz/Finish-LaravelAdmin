@extends ('layouts.master')

@section ('title', trans('labels.backend.blogtags.management') . ' | ' . trans('labels.backend.blogtags.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.blogtags.management') }}
        <small>{{ trans('labels.backend.blogtags.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($blogtag, ['route' => ['admin.blogTags.update', $blogtag], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-blogtags']) }}

        <div class="card box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.blogtags.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.blogtags.partials.blogtags-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("backend.blogtags.form")
                    <div class="edit-form-btn m-2" align="center">
                    {{ link_to_route('admin.blogTags.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-blue btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ Form::close() }}
@endsection