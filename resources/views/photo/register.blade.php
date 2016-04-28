@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">写真をアップロードする</div>

                    <div class="panel-body">

                    <form class="form-horizontal" method="GET" action="/photo/upload">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input type="file" name="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">名前</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">コメント</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="comment">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">タグ</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tag">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-upload"></i>アップロード
                                </button>

                            </div>
                        </div>
                    </form>

                    </div>

                </div>


            </div>
        </div>


    </div>



@endsection