<p>
    Hello evryone.
    Today we are about to use the famouse package Laravel-socialite to allow users sign-in/sign-up friendly with FACEBOOK without felling out the entire formulaire , so let's get started :
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
        I assume that you already know how to create a new laravel project ,but in case you don't know that's the commande line :
    </p>
    <code>
        composer create-project --prefer-dist laravel/laravel lara-socialite "6.0.*"
    </code>
</div>
<div class="2">
    <strong>2-Set up database configuration :</strong>
    <p>
        create a new database and set the parametres in .env file .
    </p>

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
        Once the installation is finished ,go to config/services.php and add the following code at the end of the file :
    </p>
    <code>
        'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT_URL'),
        ],
    </code>
    <p>
        as you can see i prefere to call all the constantes from .env file ,which means we have to define this parametres in .env file :
    </p>
    <code>
        FACEBOOK_CLIENT_ID=
        FACEBOOK_CLIENT_SECRET=
        FACEBOOK_REDIRECT_URL='http://localhost:8000/login/facebook/callback'
    </code>
    <p>
        just let FACEBOOK_CLIENT_ID & FACEBOOK_CLIENT_SECRET empty we will get back to this soon .
    </p>
</div>
<div class="5">
    <strong>5-FACEBOOK APP CONFIGURATION :</strong>
    <p>
        I hope you have reached this stage effortlessly haha ,Go to FACEBOOK DEVELOPPERS platform from this link https://developers.facebook.com/apps/ and sign-in/sign-up to your account .
        Create a new application (let's give a name laravel-socialite-fab for example) .
        Note : plz respect the format of urls callback (do exactly what i did or you will occure some problems after ).
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
<code>
    FACEBOOK_CLIENT_ID=359288421xxxxxxxxxxxxxxxx
    FACEBOOK_CLIENT_SECRET=f527bc0bb50c144xxxxxxxxxxxxxxx
    FACEBOOK_REDIRECT_URL='http://localhost:8000/login/facebook/callback'
</code>
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
        We will modify the login view (views/auth/login.blade.php) ;
    </p>
    <samp>
        <a class="btn btn-link" href="{{ url('/login/facebook') }}">
            {{ __('Login with Facebook?') }}
        </a>
    </samp>
</div>

<div class="8">
    <strong>8-Controller (logique) : :</strong>
    <p>
        Ok we are close to finish , we just need to add the code bellow inside loginController file :
        <p>don't forget to use the Auth facade and User elequoent .</p>
        
    </p>
    <code>
        <code> /**</code><br>
        <code>   * Redirect the user to the facebook authentication page.</code><br>
        <code> *</code><br>
        <code> * @return \Illuminate\Http\Response</code><br>
        <code> */</code><br>
        <code> public function redirectToProvider()
         {
        return Socialite::driver('facebook')->redirect();
        }</code><br>
        <code> /**</code><br>
        <code> * Obtain the user information from facebook.</code><br>
        <code> *</code><br>
        <code> * @return \Illuminate\Http\Response</code><br>
        <code> */</code><br>
        <code>public function handleProviderCallback()</code><br>
        {</code><br>
            <code>$user_provider = Socialite::driver('facebook')->user();</code><br>
            <code>// dd($user_provider,$user_provider->getAvatar());</code><br>
            <code>$user = $user = User::firstOrCreate(</code><br>
            <code> [</code><br>
            <code>'email' => $user_provider->getEmail()</code><br>
            <code>],</code><br>
            <code>[</code><br>
            <code>'name' => $user_provider->getName(),</code><br>
            <code>'password' => Hash::make($user_provider->getName()),</code><br>
            <code>'email' => $user_provider->getEmail(),]</code><br>
            <code>);</code><br>
            <code>Auth::login($user);</code><br>
            <code>return redirect()->route('home');</code><br>
            <code> }</code><br>

    
</div>
<div>
    <p>
        So basically FirstOrCreate method allow us to make sure if the user already exist or not , based the existing of the email adress returned by the provider , in all cases a new Authentication session will be created for the user and let him redirected to Home view .
    </p>
</div>