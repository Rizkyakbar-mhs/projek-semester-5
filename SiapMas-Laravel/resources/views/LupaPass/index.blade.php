<div class="page-header header-filter"
    style="background-image: url({{ asset('img/bg7.jpg') }}); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="POST" action="{{ url('/resetPass') }}">
              @csrf
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Lupa Password</h4>
                    <div class="social-line">
                      <a href="#pablo" class="btn btn-just-icon btn-link">
                        <i class="fa fa-facebook-square"></i>
                      </a>
                      <a href="http://twitter.com/zl_xxiv" class="btn btn-just-icon btn-link">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#pablo" class="btn btn-just-icon btn-link">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>
                </div>
                  <p class="description text-center">Or Be Classical</p><br><br>
                    <div class="card-body" style="padding-right:0">
                      <div class="input-group" style="margin:0">
                        <div class="input-group-prepend">
                          </div>
                        </div>
                        <div class="input-group" style="margin:0">
                          <div class="input-group-prepend">
                            <span class="input-group-text" style="padding-right:0">
                              <i class="material-icons">mail</i>
                            </span>
                              <div class="col-lg-12 col-sm-12" style="margin-bottom:10px">
                                <div class="form-group">
                                  <label for="Password" class="bmd-label-floating">Email...</label>
                                    <input id="email" name="email" type="email" class="form-control">
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <br><br><br><br><br>
                      <div class="footer text-center" style="margin-bottom: 10px">
                        <button class="btn btn-primary btn-round"><i class="material-icons">done</i>
                                Reset Password</button>
                        <a href="{{ url('/') }}" class="btn btn-primary btn-round"><i class="material-icons">help</i>Login Page</a>
                      </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
