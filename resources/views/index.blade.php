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
      background-color: #fff;
      margin: 3rem auto;
    }
    .border-top {
      border-top: solid 1px #eee;
      width: 70%;
      margin: 0 auto;
      padding-top: 1.5rem;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
  <div class="wrapper shadow p-3 mb-5 bg-white rounded">
    {!! Form::open(['route' => 'store']) !!}
      <div class="form-row">
        <div class="form-group col-sm-6">
          <label>姓</label>
            <input type="text" class="form-control" name="familyName" placeholder="姓">
        </div>
        <div class="form-group col-sm-6">
            <label>名</label>
            <input type="text" class="form-control" name="firstName" placeholder="名">
        </div>
      </div>
      <div class="form-group">
        <label>Eメールアドレス</label>
        <input type="email" class="form-control" name="e-mail" placeholder="Eメールアドレス">
      </div>
      <div class="form-row">
        <div class="form-group col-sm-6">
          <label>性別</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="male" value="男性">
            <label class="form-check-label" for="male">男性</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="female" value="女性">
            <label class="form-check-label" for="female">女性</label>
          </div>
        </div>
        <div class="form-group col-sm-3">
          <label>年齢</label>
          <select class="custom-select custom-select-sm" name="age">
            <option value="~19">~19</option>
            <option value="20~29">20~29</option>
            <option value="30~39">30~39</option>
            <option value="40~49">40~49</option>
            <option value="50~59">50~59</option>
            <option value="60~">60~</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label>備考</label>
        <textarea class="form-control" name="note"></textarea>
      </div>
      <div class="form-inline border-top justify-content-around">
        <button type="button" class="btn btn-primary" id="submit-btn">送信</button>
        <button type="reset" class="btn btn-secondary" id="clear-btn">クリア</button>
        <button type="button" class="btn btn-success" id="temp-btn">テンプレ</button>
        <button type="button" class="btn btn-danger" id="disabled-btn">操作不能</button>
      </div>
    {!! Form::close() !!}
    <ul id="testList" class="mt-5"></ul>
  </div>
</body>
</html>