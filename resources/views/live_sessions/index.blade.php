@include('layout/header')
@include('layout/sidebar')
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  
}
a {
  color: #ffff !important;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div class="content-wrapper">
<section class="content">
    <div class="row">
        <div class="col-12">
            @if(Session::get('data')!='')
                <div class="alert alert-success col-4 " style="text-align: center; margin: auto; background: #2ECC71;" >
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{Session::get('data')}}
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-danger col-4" style="text-align: center; margin: auto;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ $message }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Live Session(All Course)</h3>
                    </div>
                  <section class="content">
      <div class="row">
        <div class="col-12">
<div class="row"style="margin-top: 10px;">
    @foreach($list as $item)
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner" style="text-align: initial;">
                <h3>{{$item->name}}</h3>

                <p>Start:- {{$item->session_start}}</p>
                <p>End:- {{$item->session_end}}</p>
              </div>
              <div class="icon">
                <i class="fa fa-question"></i>
              </div>
              <a href="/get_live_subject/{{$item->id}}" class="small-box-footer">Subjects <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endforeach
</div>

</body>
</div>
</div>
</section>

            </div>
        </div>
    </div>
</section>
</div>
  @include('layout/footer')