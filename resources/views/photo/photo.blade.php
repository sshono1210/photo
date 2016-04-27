@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">写真をアップロードする</div>

                    <div class="panel-body">

                    <form class="form-horizontal" method="" action="">
                        {!! csrf_field() !!}

                        <div class="col-md-12">
                            <div class="col-md-offset-3">
                                <img src="http://placehold.it/300x200">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">名前</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">コメント</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">タグ</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="tag" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i>アップロード
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