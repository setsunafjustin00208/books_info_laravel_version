<script>
	$(document).ready(function() {
	$(".navbar-burger").click(function() {

		$(".navbar-burger").toggleClass("is-active");
		$(".navbar-menu").toggleClass("is-active");

	});
	});
</script>
<nav class="navbar is-link mb-4" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="<?=site_url('Views_Controller/books_dashboard')?>">
            <i class="icon is-large fas fa-book fa-lg"></i>
        <h2 class="title ml-3 has-text-light">Book Information</h2>
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
     
    </div>
    <div class="navbar-end mr-5">
      <div class="navbar-item">
        <div class="buttons">
            <form action="/logout" method="POST">
                <button class="button is-danger ml-6">
                    
                </button>
            </form>
          <a href="<?=site_url('Database_Controller/logout')?>" class="">
          <i class="fas fa-arrow-right-to-bracket"></i>
            &nbsp;
            Log out
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>