@include('layout/header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script>
  $(function () {
    $('.tog').change(function () {
      var status = $(this).prop('checked');
      var c = $(this).val();


      if (status == true) {
        //  alert('success')
        var state = "enable";
      }
      if (status == false) {
        var state = "disable";
      }


      $.ajax({
        type: 'POST',
        url: '/update_status_language',
        data: {
          _token: '{{ csrf_token() }}',
          stat: state,
          id: c
        },
        success: function (data) {

          if (data.msg.status == 'enable') {
            $.growl.active({
                title: "Language",
                message: "Language Active!"
            });
        }
        else {
          $.growl.inactive({
              title: "Language",
              message: "Language Inactive!"
          });
        }

        }

      });
    })
  })

</script>
<style>
  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }

  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: red;
    -webkit-transition: .4s;
    transition: .4s;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }

  input:checked+.slider {
    background-color: green;
  }

  input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }

  a.btn {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -o-transform: scale(0.8);
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }
</style>

@include('layout/sidebar')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success col-4" style="text-align: center; margin: auto;">
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          {{ $message }}
        </div>
        @endif

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Language List</h3>
            <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info"
              style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Add</button>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-responsive table-bordered table-striped">
              <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Language</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1 @endphp
                @foreach($data as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->name}}</td>
                  <td>
                    <label class="switch">
                      <input type="checkbox" class="tog" data-toggle="toggle" value="{{$item->id}}"
                        @if($item->status=='enable'){{'checked'}} @endif/>
                      <span class="slider round"></span>
                    </label>
                  </td>

                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary btn-sm mybtn1" id="{{$item->id}}"><i class="fas fa-pencil-alt"
                          aria-hidden="true"></i></a>
                      <form action="{{ route('language.destroy', $item->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return areyousure();  "> <i class="fas fa-trash"
                            aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    $(".mybtn1").click(function () {
      var id = $(this).attr('id');
      //alert (id);
      $.ajax({
        type: 'GET',
        url: '/language_edit/' + id,
        data: {
          _token: '{{ csrf_token() }}',
        },
        success: function (data) {
          console.log(data.msg);
          $("#myModal1").modal('show');
          $("#id").val(data.msg.id);
          $("#name").val(data.msg.name);
        }

      });
    });
  });

  function areyousure() {
    if (confirm("Are you sure, you want to delete?")) {
      return true;
    }
    else {
      return false;
    }
  }

  // Get the modal
  var modal = document.getElementById("myModal");
  var modal = document.getElementById("myModal1");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>


<!-- Modal -->

<!---- modal is here ---->
<div id="myModal" class="modal fade" role="dialog" style="z-index:9999999;">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Language</h4>
      </div>
      <div class="modal-body">
        <form action="{{route('language.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Language Name</label>
                <input type="text" placeholder="Title" class="form-control" name="name" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label name="status">Status</label>
                <label class="switch">
                  <input type="checkbox" data-on="enable" data-off="disable" name="status" value="enable">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div id="myModal1" class="modal fade" role="dialog" style="z-index:99999999999;">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Language</h4>
      </div>
      <div class="modal-body">
        <form action="/language_update" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <input type="hidden" id="id" name="id">
            <div class="col-md-12">
              <div class="form-group">
                <label>Language Name</label>
                <input type="text" placeholder="Title" class="form-control" name="name" id="name">
              </div>
            </div>
            <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--- modal is end here ---->

@include('layout/footer')