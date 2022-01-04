<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'ABeeZee';
    }
  
    header {
    padding: 10px 100px;
    box-sizing: border-box;
    }
  
    nav {
        width: 100%;
        background: rgba(0,0,0, .8);
        border-top: 1px solid rgba(255,255,255, .2);
        border-bottom: 1px solid rgba(255,255,255, .2);
        top: 0;
        }
  
    nav ul {
    display: flex;
    margin: 0;
    justify-content: flex-end;
    }
  
    nav ul li {
    list-style: none;
    }
  
    nav ul li a {
    display: block;
    color: #fff;
    padding: 0 10px;
    text-decoration: none;
    }
  
    nav ul li a:hover,
    nav ul li a.active {
    background: #f00;
    
    } 
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
  
        <li class="nav-item active">
          <a class="nav-link" href="/servicesdash">Dashboard</a>
        </li>
  
        <li class="nav-item active">
          <a class="nav-link" href="/running_task" data-toggle="modal" data-target=".runningtask">Running Services <span class="badge badge-danger"> {{$runservice}}</span></a>
        </li>
  
        <li class="nav-item active">
          <a class="nav-link" href="/services">Services</a>
        </li>
  
  
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
    </ul>
  </div>
  </nav>

  <div class="modal fade runningtask" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Running services</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                          @foreach ($reservationdata as $data)
                          <a href="/provide_service/{{$data->id}}/{{$data->roomNo}}" style="text-decoration:none">
                            <div class="alert text-dark font-weight-bold alert-danger" role="alert">
                              Room No. {{$data->roomNo}}. Reservation No. {{$data->id}}
                            </div>
                          </a>
                          @endforeach

                        </div>
                    </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
    </div>
</div>


  <script>
    document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 60) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
  }); 
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  