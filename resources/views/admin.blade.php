@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  <div class="col-md-6">
      <div class="card">
          <div class="card-header">
              Блог с новостями
          </div>
          <div class="card-body">
              <p class="card-text">Данный блог  используется для создания, редактирования и удаления новостей</p>
              <a href="/admin.show" class="btn btn-primary">ПЕРЕЙТИ</a>
          </div>
      </div>
  </div>



        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Блог с альбомами
                </div>
                <div class="card-body">
                    <p class="card-text">Данный блог используется для добавдения и удаления фотографий, в соответствующие альбомы</p>
                    <a href="/albums.all_albums" class="btn btn-primary">ПЕРЕЙТИ</a>
                </div>
            </div>
        </div>




        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-header">
                    Блог с площадками
                </div>
                <div class="card-body">
                    <p class="card-text">Данный блог используется для добавдения и удаления площадок на главной странице</p>
                    <a href="/all_playgrounds" class="btn btn-primary">ПЕРЕЙТИ</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
