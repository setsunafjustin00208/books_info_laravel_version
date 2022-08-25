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
   @if(session)

   @endif
 </nav>