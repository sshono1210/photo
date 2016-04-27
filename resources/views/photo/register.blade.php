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

                        <div class="col-md-12" style="margin-left: 80px;margin-bottom: 20px;;">
                            <div class="col-md-offset-3">
                                <img src="http://placehold.it/300x200">
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
                            <label class="col-md-4 control-label">保存場所</label>
                            <div class="col-md-6">
                                <select name="path" class="form-control">
                                    <option value="null">&nbsp;</option>
                                    <option value="chatbox">chatbox</option>
                                    <option value="Hokkaido">北海道旅行</option>
                                    <option value="KFUGconf">関西フロントエンドカンファレンス</option>
                                    <option value="moku">もくもく会</option>
                                    <option value="mosha">もしゃもしゃ会</option>
                                </select>
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