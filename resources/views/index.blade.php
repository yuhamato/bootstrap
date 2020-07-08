<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body {
      background-color: #eee;
    }
    button {
      width: 100px;
    }
    .wrapper {
      width: 1100px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
  <div class="wrapper bg-white mt-5 mx-auto shadow p-3 mb-5 bg-white rounded">
    {!! Form::open(['route' => 'store']) !!}
      <div class="form-row">
        <div class="form-group col-sm-6 mb-4">
          {{ Form::label('familyName', '姓') }}
          {{ Form::input('text', 'familyName', null, ['class' => 'form-control', 'placeholder' => '姓']) }}
        </div>
        <div class="form-group col-sm-6 mb-4">
          {{ Form::label('firstName', '名') }}
          {{ Form::input('text', 'firstName', null, ['class' => 'form-control', 'placeholder' => '名']) }}
        </div>
      </div>
      <div class="form-group mb-4">
        {{ Form::label('e-mail', 'Eメールアドレス') }}
        {{ Form::input('email', 'e-mail', null, ['class' => 'form-control', 'placeholder' => 'Eメールアドレス']) }}
      </div>
      <div class="form-row">
        <div class="form-group col-sm-6 mb-4">
          {{ Form::label('sex', '性別') }}
          <br>
          <div class="form-check form-check-inline">
            {{Form::radio('sex', 'male', false, ['class'=>'form-check-input', 'id'=>'male']) }}
            {{ Form::label('male', '男性', ['class' => 'form-check-label']) }}
          </div>
          <div class="form-check form-check-inline">
            {{Form::radio('sex', 'female', false, ['class'=>'form-check-input', 'id'=>'female']) }}
            {{ Form::label('female', '女性', ['class' => 'form-check-label']) }}
          </div>
        </div>
        <div class="form-group col-sm-3 mb-4">
          {{ Form::label('age', '年齢') }}
          {{ Form::select('age', ['~19' => '~19', '20~29' => '20~29', '30~39' => '30~39', '40~49' => '40~49', '50~59' => '50~59', '60~' => '60~'], null, ['class' => 'custom-select custom-select-sm']) }}
        </div>
      </div>
      <div class="form-group mb-4">
        {{ Form::label('note', '備考') }}
        {{ Form::textarea('note', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-inline border-top w-75 mx-auto pt-4 justify-content-around">
        {{ Form::button('送信', ['class' => 'btn btn-primary', 'id' => 'submit-btn']) }}
        {{ Form::button('クリア', ['type' => 'reset', 'class' => 'btn btn-secondary', 'id' => 'clear-btn']) }}
        {{ Form::button('テンプレ', ['class' => 'btn btn-success', 'id' => 'temp-btn']) }}
        {{ Form::button('操作不能', ['class' => 'btn btn-danger', 'id' => 'disabled-btn']) }}
      </div>
    {!! Form::close() !!}
    <ul id="testList" class="mt-5"></ul>
  </div>
</body>
</html>