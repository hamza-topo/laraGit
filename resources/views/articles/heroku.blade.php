<p>
    Heroku is a cloud platform that lets companies build, deliver, monitor and scale apps — we're the fastest way to go from idea to URL, bypassing all those infrastructure headaches.
</p>
<ul>
    <li><a target="_blank" href="https://signup.heroku.com/">1 Create a new Heroku account.</a></li>
    <li><a target="_blank" href="https://devcenter.heroku.com/articles/heroku-cli#download-and-install">2 Download and install HEROKU CLI.</a></li>
    <li><a href="">3 Create a Procfile.</a></li>
    <li><a href="">4 Initialize project as Git repo.</a></li>
    <li><a href="">5 Logging Into Heroku From Terminal.</a></li>
    <li><a href="">6 Create a heroku application.</a></li>
    <li><a href="">7 Setting a Laravel encryption key.</a></li>
    <li><a href="">8 Push the changes to Heroku.</a></li>
    <li><a href="">9 Start the Application.</a></li>
    <!-- <li><a href="">10 Configure the Database on Heroku Using ClearDb adds-on.</a></li>-->
</ul>
<div class="3">
    <strong>3- Create a Procfile :</strong>
    <p>
        After installing Heroku CLI , go to your laravel root project directory and create a file with the name "Procfile" (no need to specify the extension) ;and past the content below inside :
    </p>
    <blockquote class="blockquote">
        web: vendor/bin/heroku-php-apache2 public/
    </blockquote>
</div>
<div class="4">
    <strong>4- Initialize project as Git repo :</strong>
    <p>
        Initialize Git repo using the following command:
    </p>
    <blockquote class="blockquote">
        git init
    </blockquote>
</div>
<div class="5">
    <strong>5- Logging Into Heroku From Terminal :</strong>
    <p>
        Loggin to your heroku account using CLI by typing :
    </p>
    <blockquote class="blockquote">
        heroku auth:login
    </blockquote>
</div>
<div class="6">
    <strong>6- Create a heroku application :</strong>
    <p>
        ok ,now we can create our app by the command line bellow:
    </p>
    <blockquote class="blockquote">
        heroku auth:login
    </blockquote>
    <p>
        if you already done this from heroku platform (manually). you need to connect your local project to the exesting app on heroku ,write this commmand:
    </p>
    <blockquote class="blockquote">
        heroku git:remote -a heroku-app-name-here
    </blockquote>
</div>
<div class="7">
    <strong>7- Setting a Laravel encryption key :</strong>
    <p>
        this command line will generate the app key for your laravel project copy it you will need it now :
    </p>
    <blockquote class="blockquote">
        php artisan key:generate --show
    </blockquote>
    <p>
        we need to set the key generated to heroku app_key , then tape enter:
    </p>
    <blockquote class="blockquote">
        heroku config:set APP_KEY= past_your_copied_key_here
    </blockquote>
</div>
<div class="8">
    <strong>8- Push the changes to Heroku :</strong>
    <p>
        are we done ? not yet our changes should be commited ; so to do that we will just write the famouse git command line to push code/project changes :
    </p>
    <blockquote class="blockquote">
        git add .
    </blockquote>

    <blockquote class="blockquote">
        git commit -m "first commit "
    </blockquote>

    <blockquote class="blockquote">
        git push heroku main
    </blockquote>
</div>
<div class="9">
    <strong>9- Start the Application :</strong>
    <p>
        there we go we have just finished the work now ;you want to see your deployed app ? tape :
    </p>
    <blockquote class="blockquote">
        heroku open
    </blockquote>
</div>