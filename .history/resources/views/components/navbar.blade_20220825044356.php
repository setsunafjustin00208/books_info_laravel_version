<nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
    <script>
     $(document).ready(function() {
     $(".navbar-burger").click(function() {
 
         $(".navbar-burger").toggleClass("is-active");
         $(".navbar-menu").toggleClass("is-active");
 
     });
     });
 </script>
   <div class="navbar-brand">
     <a class="navbar-item" href="/">
         <i class="icon is-large fas fa-book fa-lg"></i>
       <h2 class="title ml-3 has-text-light">Book Information</h2>
     </a>
     <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
       <span aria-hidden="true"></span>
       <span aria-hidden="true"></span>
       <span aria-hidden="true"></span>
     </a>
   </div>
   @if($requestsession()->has('id'))
   <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
     
    </div>
    <div class="navbar-end mr-5">
      <div class="navbar-item">
        <div class="buttons">
            <form method="POST" action="/logout">
              @csrf
                <button class="button is-danger ml-6" type="submit">
                    <i class="fas fa-arrow-right-to-bracket"></i>
                    &nbsp;
                    Log out
                  </a>
                </button>
            </form>
        </div>
      </div>
    </div>
   @endif
 </nav>