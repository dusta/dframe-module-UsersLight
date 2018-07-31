<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Dframe</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.6/sweetalert2.min.css"/>

</head>
<div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <form class="sign-in" action="{$router->makeUrl('user/login')}" method="POST">
                    <h3>Sign in</h3>
                    <p>
                        Please enter your username and password to login
                    </p>
                    <div class="form-group">
                        <label for="sign-in-2-username" class="bmd-label-floating">Username</label>
                        <input name="username" type="text" id="sign-in-2-username" class="form-control">
                        <span class="bmd-help">Please enter your username</span>
                    </div>
                    <div class="form-group">
                        <label for="sign-in-1-password" class="bmd-label-floating">Password</label>
                        <input name="password" type="password" id="sign-in-1-password" class="form-control">
                        <span class="bmd-help">Please enter your password</span>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="sign-in-2-token" class="bmd-label-floating">Token</label>
                        <input name="token" value="{token name='loginToken'}" type="hidden" id="sign-in-2-token" class="form-control">
                        <span class="bmd-help"></span>
                    </div>
                    <button class="btn btn-raised btn-lg btn-secondary btn-block" type="submit">Sign in</button>
                    <p class="sign-up-link"></a></p>
                    <p class="copyright">&copy; Copyright {'Y'|date}</p>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Created on <a href="https://dframeframework.com" target="_blank" title="Dframe - PHP framework">Dframe</a>.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.6/sweetalert2.all.js"></script>
    
</body>
</html>