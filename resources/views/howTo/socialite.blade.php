<p>
    Hello evryone.
    Today we are about to use the famouse package <strong>Laravel-socialite</strong> to allow users sign-in/sign-up friendly with <strong>FACEBOOK</strong> without felling out the entire formulaire , so let's get started :
</p>
<ul>
    <li><a target="_blank" href="#">1- Create a New Laravel Project :</a></li>
    <li><a target="_blank" href="#">2-Set up database configuration :</a></li>
    <li><a href='#'>3-Install the new package laravel-socialite :</a></li>
    <li><a href='#'>4-Laravel socialite configuration :</a></li>
    <li><a href='#'>5-FACEBOOK APP CONFIGURATION :</a></li>
    <li><a href='#'>6-Routing :</a></li>
    <li><a href='#'>7-View : </a></li>
    <li><a href='#'>8-Controller (logique) :</a></li>

    <!-- <li><a href='#'>10 Configure the Database on Heroku Using ClearDb adds-on.</a></li>-->
</ul>
<div class="1">
    <strong>1-Create a New Laravel Project :</strong>
    <p>
        I assume that you already know how to create a new laravel project ,but in case you don't know how to do that; use the commande line bellow :
    </p>
    <code>
        composer create-project --prefer-dist laravel/laravel lara-socialite "6.0.*"
    </code>
</div>
<div class="2">
    <strong>2-Set up database configuration :</strong>
    <p>
        create a new database and set the parametres in <strong>.env</strong> file ,Then run migrations to generate the users table ,using the commande line :
    </p>
    <code>php artisan migrate</code>

</div>
<div class="3">
    <strong>3-Install the new package laravel-socialite :</strong>
    <p>
        use the commande line to install the package :
    </p>
    <code>
        composer require laravel/socialite
    </code>
</div>
<div class="4">
    <strong>4-Laravel socialite configuration :</strong>
    <p>
        Once the installation is finished ,go to <strong>config/services.php</strong> and add the following code at the end of the file :
    </p>

    <code>'facebook' => [</code><br>
    <code>'client_id' => env('FACEBOOK_CLIENT_ID'),</code><br>
    <code>'client_secret' => env('FACEBOOK_CLIENT_SECRET'),</code><br>
    <code>'redirect' => env('FACEBOOK_REDIRECT_URL'),</code><br>
    <code>],</code>

    <p>
        as you can see i prefere to call all the constantes from .env file ,which means we have to define this parametres in .env file :
    </p>

    <code>FACEBOOK_CLIENT_ID=</code><br>
    <code>FACEBOOK_CLIENT_SECRET=</code><br>
    <code>FACEBOOK_REDIRECT_URL='http://localhost:8000/login/facebook/callback'</code><br>

    <p>
        just let <strong>FACEBOOK_CLIENT_ID & FACEBOOK_CLIENT_SECRET</strong> empty we will get back to this soon .
    </p>
</div>
<div class="5">
    <strong>5-FACEBOOK APP CONFIGURATION :</strong>
    <p>
        I hope you have reached this stage effortlessly haha ,Go to <strong>FACEBOOK DEVELOPPERS</strong> platform from this link <a href="https://developers.facebook.com/apps/">https://developers.facebook.com/apps/</a> and sign-in/sign-up to your account .
        Create a new application (let's give it a name laravel-socialite-fab for example) .
        Note : plz respect the format of urls callback (do exactly what i did or you will occure some ssl problems after ).
    </p>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/0.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/1.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/2.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/3.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/4.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/5.png')}}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-lazy" src="{{asset('img/socialite/6.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
<p>
    Once you have done and the facebook aplication created , copy the the parametres and paste it in the .env file :
</p>

<code>FACEBOOK_CLIENT_ID=359288421xxxxxxxxxxxxxxxx</code><br>
<code>FACEBOOK_CLIENT_SECRET=f527bc0bb50c144xxxxxxxxxxxxxxx</code><br>
<code>FACEBOOK_REDIRECT_URL='http://localhost:8000/login/facebook/callback'</code><br>

</div>
<div class="6">
    <strong>6-Routing :</strong>
    <p>
        Following the laravel documentation for socialite package we will notice that there is 2 routes used :
    </p>
    <code>
        Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
        Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
    </code>

    <p>
        The redirect method takes care of sending the user to the OAuth provider
        will '/login/facebook/callback', read the incoming request and retrieve the user's information from the provider.
    </p>
</div>

<div class="7">
    <strong>7-View :</strong>
    <p>
        We will modify the login view <strong>views/auth/login.blade.php</strong> so simply we will just add a link tag for the login facebook route ;
    </p>
    <img src="{{asset('img/socialite/ok.png')}}" class="" />
</div>

<div class="8">
    <strong>8-Controller (logique) : :</strong>
    <p>
        Ok we are close to finish , we just need to add the code bellow inside loginController file :
        <p>don't forget to use the Auth facade and User elequoent .</p>

    </p>
    
    <div style="margin-right: 150px;">
        <iframe src="https://carbon.now.sh/embed?bg=rgba%2859%2C74%2C89%2C1%29&t=duotone-dark&wt=none&l=text%2Fx-php&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=false&pv=56px&ph=56px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Anamespace%2520App%255CHttp%255CControllers%255CAuth%253B%250A%250Ause%2520App%255CHttp%255CControllers%255CController%253B%250Ause%2520App%255CProviders%255CRouteServiceProvider%253B%250Ause%2520Illuminate%255CFoundation%255CAuth%255CAuthenticatesUsers%253B%250Ause%2520App%255CUser%253B%250Ause%2520Socialite%253B%250Ause%2520Auth%253B%250Ause%2520Hash%253B%250Aclass%2520LoginController%2520extends%2520Controller%250A%257B%250A%2520%2520%2520%2520%252F*%250A%2520%2520%2520%2520%257C--------------------------------------------------------------------------%250A%2520%2520%2520%2520%257C%2520Login%2520Controller%250A%2520%2520%2520%2520%257C--------------------------------------------------------------------------%250A%2520%2520%2520%2520%257C%250A%2520%2520%2520%2520%257C%2520This%2520controller%2520handles%2520authenticating%2520users%2520for%2520the%2520application%2520and%250A%2520%2520%2520%2520%257C%2520redirecting%2520them%2520to%2520your%2520home%2520screen.%2520The%2520controller%2520uses%2520a%2520trait%250A%2520%2520%2520%2520%257C%2520to%2520conveniently%2520provide%2520its%2520functionality%2520to%2520your%2520applications.%250A%2520%2520%2520%2520%257C%250A%2520%2520%2520%2520*%252F%250A%250A%2520%2520%2520%2520use%2520AuthenticatesUsers%253B%250A%250A%2520%2520%2520%2520%252F**%250A%2520%2520%2520%2520%2520*%2520Where%2520to%2520redirect%2520users%2520after%2520login.%250A%2520%2520%2520%2520%2520*%250A%2520%2520%2520%2520%2520*%2520%2540var%2520string%250A%2520%2520%2520%2520%2520*%252F%250A%2520%2520%2520%2520protected%2520%2524redirectTo%2520%253D%2520RouteServiceProvider%253A%253AHOME%253B%250A%250A%2520%2520%2520%2520%252F**%250A%2520%2520%2520%2520%2520*%2520Create%2520a%2520new%2520controller%2520instance.%250A%2520%2520%2520%2520%2520*%250A%2520%2520%2520%2520%2520*%2520%2540return%2520void%250A%2520%2520%2520%2520%2520*%252F%250A%2520%2520%2520%2520public%2520function%2520__construct%28%29%250A%2520%2520%2520%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2524this-%253Emiddleware%28%27guest%27%29-%253Eexcept%28%27logout%27%29%253B%250A%2520%2520%2520%2520%257D%250A%250A%2520%2520%2520%2520%252F**%250A%2520%2520%2520%2520%2520*%2520Redirect%2520the%2520user%2520to%2520the%2520facebook%2520authentication%2520page.%250A%2520%2520%2520%2520%2520*%250A%2520%2520%2520%2520%2520*%2520%2540return%2520%255CIlluminate%255CHttp%255CResponse%250A%2520%2520%2520%2520%2520*%252F%250A%2520%2520%2520%2520public%2520function%2520redirectToProvider%28%29%250A%2520%2520%2520%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520return%2520Socialite%253A%253Adriver%28%27facebook%27%29-%253Eredirect%28%29%253B%250A%2520%2520%2520%2520%257D%250A%250A%2520%252F**%250A%2520%2520%2520%2520%2520*%2520Obtain%2520the%2520user%2520information%2520from%2520facebook.%250A%2520%2520%2520%2520%2520*%250A%2520%2520%2520%2520%2520*%2520%2540return%2520%255CIlluminate%255CHttp%255CResponse%250A%2520%2520%2520%2520%2520*%252F%250A%2520%2520%2520%2520public%2520function%2520handleProviderCallback%28%29%250A%2520%2520%2520%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2524user_provider%2520%2520%2520%253D%2520%2520%2520Socialite%253A%253Adriver%28%27facebook%27%29-%253Euser%28%29%253B%250A%2520%2520%2520%2520%2520%2520%2520%252F%252F%2520dd%28%2524user_provider%252C%2524user_provider-%253EgetAvatar%28%29%29%253B%2520%2520%2520%250A%2520%2520%2520%2520%2520%2520%2520%2520%2524user%2520%2520%253D%2520%2524user%2520%2520%253D%2520%2520%2520User%253A%253AfirstOrCreate%28%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%255B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%27email%27%2520%253D%253E%2520%2524user_provider-%253EgetEmail%28%29%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%255D%252C%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%255B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%27name%27%2520%253D%253E%2520%2524user_provider-%253EgetName%28%29%252C%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%27password%27%2520%253D%253E%2520Hash%253A%253Amake%28%2524user_provider-%253EgetName%28%29%29%252C%2520%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%27email%27%2520%253D%253E%2520%2524user_provider-%253EgetEmail%28%29%252C%255D%250A%2520%2520%2520%2520%2520%2520%2520%2520%29%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520Auth%253A%253Alogin%28%2524user%29%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520return%2520redirect%28%29-%253Eroute%28%27home%27%29%253B%250A%2520%2520%2520%2520%257D%250A%2520%2520%2520%2520%2520%2520%2520%250A%257D%250A%250A" style="width: 676px; height: 1590px; border:0;" sandbox="allow-scripts allow-same-origin">
        </iframe>
    </div>
</div>
<div>
    <p>
        So basically FirstOrCreate method allow us to make sure if the user already exist or not , based the existing of the email adress returned by the provider , in all cases a new Authentication session will be created for the user and let him redirected to Home view .
    </p>
</div>