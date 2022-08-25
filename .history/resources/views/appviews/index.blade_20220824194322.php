<x-layout>
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
          <div class="container">
            <div class="columns is-centered">
              <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <div class="box animate__animated animate__fadeInUpBig">
                  <center>
                    <span class="icon is-large">
                      <i class="fas fa-book-open fa-10x"></i>
                    </span>
                    <h3 class="title is-3">Log-In</h3>
                  </center>
                  <form method="POST" action="/users/authenticate">
                    @csrf
                    <div class="field">
                      <label for="" class="label">Email</label>
                      <div class="control has-icons-left">
                        <input type="text" placeholder="Enter Email" class="input" name="email">
                        <span class="icon is-small is-left">
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                        @error('username')
                            <div class="field icon-text mt-4 mb-4 has-text-danger">
                                <span class="icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span>
                                    {{$message}}
                                </span>
                            </div>
                        @enderror
                    </div>
                    <div class="field">
                      <label for="" class="label">Password</label>
                      <div class="control has-icons-left">
                        <input type="password" placeholder="Enter Password" class="input" name="password">
                        <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                        </span>
                      </div>
                            @error('password')
                            <div class="field icon-text mt-4 mb-4 has-text-danger">
                                <span class="icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span>
                                    {{$message}}
                                </span>
                            </div>
                        @enderror
                    </div>
                    <div class="field">
                      <button class="button is-success">
                        Login
                      </button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-layout>
