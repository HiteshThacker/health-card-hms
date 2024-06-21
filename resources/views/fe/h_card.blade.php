<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('fe/css/style.css')}}" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <style>
       /* Import Google Font - Poppins */

      @import url('https://fonts.googleapis.com/css2?family=Orbitron&family=Poppins:wght@300;400&display=swap');



* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  overflow-wrap: break-word;
}

body {
  min-height: 100vh;
  display:flex;
  align-items: center;
  justify-content: center;
  /* background: black; */
}
.container {
  position: absolute;
  /* background: linear-gradient(110deg, pink 80%, white 10%); */
  /* background: -webkit-linear-gradient(left, grey 30%, white 30%,gray); */
  /* background: -webkit-linear-gradient(110deg,pink 30%, white ,pink); */
  background: -webkit-repeating-linear-gradient(#05C3DD,white );

  /* background-image: repeating-linear-gradient(to top, rgb(130, 149, 171),rgb(137, 141, 173)); */
  border: 2px solid black;
  background-size: cover;
  padding: 25px;
  border-radius: 28px;
  max-width: 450px;
  min-width: 380px;
  width: 100%;
  box-shadow: 3px 7px 20px rgba(0, 0, 0, 0.2);
  /* print-color-adjust: exact; */

}
.container::after{
  background-color: red;

}
header,
.logo {
  display: flex;
  align-items: center;
  justify-content: space-between;

}
.logo img {
  width: 48px;
  margin-right: 10px;
  border-radius: 10px;
}

h5,h4 {
  font-size: 16px;
  font-weight: 400;
  color: black;
}

h6 {
  color: #000;
  font-size: 10px;
  font-weight: 400;
}
h5.number {
  margin-top: 4px;
  font-size: 18px;
  letter-spacing: 1px;
}
h5.name {
    font-size: 16px;
  margin-top: 20px;
  text-transform: uppercase;
  font-family: 'Orbitron', sans-serif;
  color: black;
  word-spacing: 2px;
  /* overflow-wrap: break-word; */
}

.container .card-details {
  margin-top: 40px;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}
.icn{
    margin-left: 5px;

}
#tit{
    color: black;font-size: 25px;-webkit-text-stroke-width: .7px;
    -webkit-text-stroke-color:white;
}

    </style>
</head>
<body>

<header class="header" id="header">


        <a href="{{url('/')}}" class="logo"> <i class="fas fa-heartbeat mx-2"></i> health card </a>


        <nav class="_navbar navbar navbar-expand-lg ">

            <a href="{{url('/')}}">home</a>

            <a href="{{url('/services')}}">services</a>

            <a href="{{url('/about')}}">about</a>

            <a href="{{url('/doctors')}}">doctors</a>
            @if (session()->get('h_id')!='')
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width:40%;">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    help
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item w-auto"  href="{{url('/booking')}}">book appoinment</a></li>
                      <li><a class="dropdown-item w-auto" href="{{url('/help')}}">Quick treatment</a></li>


                  </ul>
                </li>

              </ul>

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="{{asset('storage/uploads/patients/'.session()->get('url'))}}" alt="" class="rounded-circle" height="30" width="30">
                  {{-- <span class="d-none d-md-block dropdown-toggle ps-2"></span> --}}
                </a><!-- End Profile Iamge Icon json_encode() -->



                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header text-center ">
                  <h3>
                    {{ session()->get('name')}}
                  </h3>

                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item w-auto" href="{{url('/card')}}"><i class="bi bi-eye" ></i><span class="mx-3">Print/show card</span></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item w-auto" href="{{url('/up_profile')}}"><i class="bi bi-person"></i><span class="mx-3">Update profile</span></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item w-auto" href="{{url('/change_pass')}}"><i class="bi bi-wrench"></i><span class="mx-3">Password</span> </a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>

                  <li>
                    <a class="dropdown-item d-flex align-items-center w-auto" href="{{url('/logout')}}">
                      <i class="bi bi-box-arrow-right"></i>
                      <span class="mx-3">logout</span>
                    </a>
                  </li>

                </ul><!-- End Profile Dropdown Items -->


            @endif

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

</header>

    <div class="container" id="con">
        <header>
        <span class ="logo">
            <img src="{{url('fe/image/hospital_logo.jpg')}}" alt="">


            <h3  id="tit">Health Card</h3>
        </span>
        <img src="{{asset('storage/uploads/patients/'.session()->get('url'))}}" height="100" width="100" style="margin-bottom: -50px; border-radius:.5rem;">
        </header>
        <div class="card-details">
            <div class="name-number">

              <h6>Card Number</h6>
              <h5 class="number">{{$p->health_id}}</h5>

              <h6>Birth Date</h6>
              <h5>{{$p->dob}}</h5>



              <h5 class="name">{{$p->name." ".$p->l_name}}</h5>
            </div>
             <div class="icn">
                <div class=" my-auto" >
              <h6> Valid till</h6>
              <h5>01/24</h5>
            </div>
               {{-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABKklEQVR4nO1ZQYrCQBCsl+iK7i88mv2SV1EIC95dfVs8rPoCPQdKBvowLERNuyYzWAV1C91VM9PppAcQBEFIGgQ+COwInAjUBPhi1pZrG3I/K/6LwKUD0WxgyF14xY96Fk/jmcDQY2CXgHgafzwGTgkIp/HgMdBFwfJB1h4DTImQAbRetYrA2FjluANlFKvM0cAiirWQgbbQDkBHiCpi3n/Prwl8N3AW1dPsxnPrR/rEK4p43Dpoc67PPgxMcjdQEVgSmDdwGsWa3nhuRWCvTvwXamRQI6MaGd/8c7rM/YemCs3OmtQ+RwP8T+IdDdR9i+aTg61jAsJp/PUY2CYgnMaN92IjlfH6oLUBM1FYgD7FFy7xkYlhmM+HEXeHV0yHcGzcKy8IgoCucAX9SkHnPqBcXQAAAABJRU5ErkJggg=="> --}}
               <img src="data:image/png;base64,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">
            </div>
        </div>
    </div>
    {{-- <form action="{{url('/')}}/card" id="frm">
        @csrf --}}
        <input type="submit" value="print card" class="btn" style="margin-top:50rem;z-index:0;" id="print">
    {{-- </form> --}}

<!-- custom js file link  -->
<script src="{{url('fe/js/script.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

    const p= document.querySelector('#print');
    p.addEventListener('click', () => {
        // document.querySelector('#print').style.display="none";
        // document.querySelector('#header').style.display="none";

        document.querySelector('#print').style.display="none";
        document.querySelector('#header').style.display="none";
        // document.querySelector('#con').style.background="cyan";
        window.print();
        document.querySelector('#print').style.display="";
        document.querySelector('#header').style.display="";

        // location.reload();
        // document.querySelector('#frm').hide();
        // p.style.display="none";


     });
    document.addEventListener('contextmenu',(e)=>e.preventDefault());

    function ctrlShiftKey(e,keyCode){
        return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
    }

    document.onkeydown=(e)=>{
        if(
            event.keyCode===123 ||
            ctrlShiftKey(e,'I') ||
            ctrlShiftKey(e,'J') ||
            ctrlShiftKey(e,'C') ||
            (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))

        )
        return false;
    }

</script>
</body>
</html>

