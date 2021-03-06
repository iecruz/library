<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col s4 m2 offset-s4 offset-m5">
            <img src="<?= base_url('assets/img/logo-fit.png') ?>" class="responsive-img" alt="">
        </div>
        <div class="col s12">
            <h4 class="center-align blue-text text-darken-1">adInfinitum</h4>
        </div>
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <form action="<?= base_url('login') ?>" method="post">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <h5 class="blue-text">Login</h5>
                            </div>
                            <div class="input-field col s12">
                                <div class="material-icons prefix">account_circle</div>
                                <input id="emailField" type="email" class="validate" name="email" required>
                                <label for="emailField">Email Address</label>
                            </div>
                            <div class="input-field col s12">
                                <div class="material-icons prefix">lock</div>
                                <input id="passwordField" type="password" class="validate" name="password" maxlength="32" required>
                                <label for="passwordField">Password</label>
                            </div>
                            <div class="col s12">
                                <center>
                                    <button type="submit" class="btn blue waves-effect waves-light">
                                        Login
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <a href="<?= base_url('reset') ?>" class="btn blue waves-effect waves-light"><i class="material-icons left">help</i>Forgot Password</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php if($this->session->flashdata('message')): ?>
            <div class="card-panel green">
                <p class="white-text"><?= $this->session->flashdata('message') ?? '' ?></p>
            </div>
            <?php endif ?>
            <?php if($this->session->flashdata('errors')): ?>
            <div class="card-panel red">
                <p class="white-text"><?= $this->session->flashdata('errors') ?></p>
            </div>
            <?php endif ?>
            <h5 class="center-align blue-text text-darken-1">OR</h5>
            <center>
                <a href="<?= base_url('register') ?>" class="btn btn-large blue waves-effect waves-light">
                    <i class="material-icons left">add</i>
                    Register
                </a>
            </center>
            <br>
            <center>
                <a href="<?= base_url('catalog') ?>" class="btn btn-large waves-effect blue"><i class="material-icons left">library_books</i>Open Online Public Access Catalog</a>
            </center>
        </div>
    </div>
</div>