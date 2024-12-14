@extends('layouts.admin')
@section('title', '新規投稿作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規投稿作成</h2>
                <form action="{{ route('admin.app.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">毛色</label>
                        <div class="col-md-10">
                            <select type="tinyint" class="form-control" name="color">
                                <option value="white">白</option>
                                <option value="black">黒</option>
                                <option value="gray">グレー</option>
                                <option value="red tabby">茶トラ</option>
                                <option value="brown tabby">キジトラ</option>
                                <option value="silver tabby">サバトラ</option>
                                <option value="calico">ミケ</option>
                                <option value="tortoiseshell">サビ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">模様</label>
                        <div class="col-md-10">
                            <select type="tinyint" class="form-control" name="pattern">
                                <option value="full">全身模様</option>
                                <option value="white mixed">白混ざり</option>
                                <option value="jump pattern">トビ柄（柄が少ない）</option>
                                <option value="light pattern">薄模様</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">成猫か</label>
                        <div class="col-md-10">
                            <select type="tinyint" class="form-control" name="is_adult">
                                <option value="adult">成猫</option>
                                <option value="child">子猫</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">外にいるか</label>
                        <div class="col-md-10">
                            <select type="tinyint" class="form-control" name="is_outor">
                                <option value="outor">外にいる</option>
                                <option value="store">お店にいる</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection