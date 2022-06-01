@extends('layouts.app')

@section('pageTittle')
    Environment-Create
@endsection

@section('cssLink')
    <!-- ------------------- CDN CSS Section ------------------- -->
    <!-- Bootstrap 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- ------------------- My CSS Section ------------------- -->
    <link rel="stylesheet" href="{{ asset('css/back.css') }}">

    <style>
        form img {
            max-height: 400px;
            max-width: 400px;
        }

    </style>
@endsection

@section('mainSec')
    <section id="back_area">
        <div class="container my_con">
            <form class="d-flex flex-column" action="/environment/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="env_img" class="form-label">環境照-圖片上傳</label>
                    <input type="file" name="env_img" id="env_img" class="form-control" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="env_remark" class="form-label">備註 (非必填)</label>
                    <input type="text" name="env_remark" id="env_remark" class="form-control">
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a class="btn btn-secondary px-4" href="/environment">取消</a>
                    <input type="submit" value="新增照片" class="btn btn-primary px-4 mx-3">
                </div>
            </form>
        </div>
    </section>
@endsection

@section('jsCdn')
    <!-- Bootstrap 5.1.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection