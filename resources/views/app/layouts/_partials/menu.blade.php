<body id="body-pd">

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        {{-- <div class="header_img menu_index"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> --}}
        <div class="titulo-pagina-2" style="margin-left: 30% !important; margin-right:12%; width: 100%; margin-top: 0.5%;">
            <h2>{{$titulo ?? ''}}</h2>
        </div>
        {{-- @if (isset($titulo))
        <div class="link_">
            <a href="{{route($link1['rota'])}}" style="text-decoration:none">{{$link1['nome'] ?? ''}}</a> 
            <a style="color: blue">|</a>
            <a href="{{route($link2['rota'])}}" style="text-d      ecoration:none">{{$link2['nome'] ?? ''}}</a> 
        </div>
        @endif --}}

        
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav" id="sidebar">
            <div style="width: 200px !important;"> 
                <a href="{{ route('app.home') }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Projeto</span> </a>
                <div class="nav_list"> 
                    <a href="{{ route('app.home') }}" class="nav_link {{ $classe_home ?? '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a>


                     <!-- <button class="dropdown-btn drop">Dropdown 
                        <i class="fa fa-caret-down"></i>
                    </button> -->

                    <a class="nav_link drop-side {{$classe_candidato ?? ''}}" style="margin-top: -5%; ">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Alunos</span> 
                    </a>

                    <div class="dropdown-container">
                        <li><a class="nav_link link-drop" href="{{ route('app.student.add')}}">Cadastrar</a></li>
                        <li><a class="nav_link link-drop" href="{{ route('app.student.list')}}">Listar</a></li>
                    </div>

                    <a class="nav_link drop-side {{$classe_candidato ?? ''}}" style="margin-top: -5%;">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Professores</span> 
                    </a>
                    <div class="dropdown-container">
                    <li><a class="nav_link link-drop" href="{{ route('app.teacher.add')}}">Cadastrar</a></li>
                        <li><a class="nav_link link-drop" href="{{ route('app.teacher.list')}}">Listar</a></li>
                    </div>

                    <a class="nav_link drop-side {{$classe_candidato ?? ''}}" style="margin-top: -5%;">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Salas</span> 
                    </a>
                    <div class="dropdown-container">
                    <li><a class="nav_link link-drop" href="{{ route('app.teacher.add')}}">Cadastrar</a></li>
                        <li><a class="nav_link link-drop" href="{{ route('app.teacher.list')}}">Listar</a></li>
                    </div>

                    <a class="nav_link drop-side {{$classe_candidato ?? ''}}" style="margin-top: -5%;">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Cursos</span> 
                    </a>
                    <div class="dropdown-container">
                    <li><a class="nav_link link-drop" href="{{ route('app.course.add')}}">Cadastrar</a></li>
                        <li><a class="nav_link link-drop" href="{{ route('app.course.list')}}">Listar</a></li>
                    </div>

                    <a class="nav_link drop-side {{$classe_candidato ?? ''}}" style="margin-top: -5%;">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Beacons</span> 
                    </a>
                    <div class="dropdown-container">
                    <li><a class="nav_link link-drop" href="{{ route('app.beacon.add')}}">Cadastrar</a></li>
                        <li><a class="nav_link link-drop" href="{{ route('app.beacon.list')}}">Listar</a></li>
                    </div>

                    <a href="" class="nav_link drop-side {{$classe_candidato ?? ''}}" style="margin-top: -5%;">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Chamadas</span> 
                    </a>


                    {{-- <a href="" class="nav_link {{ $classe_recrutador ?? ''}}"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name ">Recrutador</span> 
                    </a> 

                    <a href="" class="nav_link {{ $classe_contratante ?? ''}}"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Contratante</span> </a> 
                    <a href="#" class="nav_link {{ $classe ?? ''}}"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> 
                    <a href="#" class="nav_link {{ $classe ?? ''}}"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>  --}}
                </div>
            </div> <a href="{{ route('app.sair') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a>

            
        </nav>

    </div>


<!-- <script src="script.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
/* var dropdown = document.getElementsByClassName("drop-side"); */
var dropdown = document.getElementsByClassName("drop-side");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>