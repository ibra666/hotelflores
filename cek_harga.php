<!DOCTYPE html>
<html lang="en">

<head>
    <title>cek harga</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">lantai dan hari dibooking</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">lantai</label>
                  <input type="text" class="form-control" id="lantaii">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">hari</label>
                  <input type="text" class="form-control" id="harii">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #038ade;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="javascript:void(0)">
                <h4 style="color: cornsilk;" class="ml-4">Hotel Flores</h4>
            </a>
            <ul class="navbar-nav" style="margin-left: 70%;">
                <li class="nav-item">
                    <a class="nav-link ml-3" href="index.php">
                        <h5 style="color: rgba(224, 222, 222, 0.562);">Home</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-3" href="javascript:void(0)">
                        <h5 style="color: rgb(255, 255, 255);">Cek Harga</h5>
                    </a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="Login.php">
                        <h5 style="color: rgba(224, 222, 222, 0.562);">Logout</h5>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content mt-5 ml-5">
        <h5 style="font-style: bold;"><strong><b> Cek Harga</b></strong></h5>
        <form action="price.html" method="POST">
            <div class="form-group row mt-4">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Lantai</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="lantai">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Tipe</label>
                <div class="col-sm-3">
                    <select id="inputState" class="form-control">
                        <option value="400000" selected>Standard</option>
                        <option value="400000">Superior</option>
                        <option value="500000">Deluxe</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Membership</label>
                <div class="col-sm-3">
                    <select id="inputState" class="form-control">
                        <option selected>Non-member</option>
                        <option>Membership</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="colFormLabel" class="col-sm-1 col-form-label">Hari</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="hari">
                </div>
            </div>
            <button type="button" class="btn btn-primary cek" data-toggle="modal" data-target="#exampleModal" style="margin-left: 27%;">booking</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

     <!-- jquery area -->
    <script type="text/javascript">
        $(".cek").click(function(){
            let test1 = $('#lantai').val();
            let test2 = $('#hari').val();
            $('#lantaii').val(test1);
            $('#harii').val(test2);
        });
    </script>
</body>
</html>