<p>
    Hello Again !
</p>
<p>Today I will be shidding light on Events, Observers concept in laravel.</p>
<p>According to laravel Docs;<strong>Events</strong> are a simple observer implementation, allowing as to subscribe and listen for
    various events that occure in your application. While <strong>Observers</strong> used if you are listening for many events on a given Model , you may use Observers to group all of your listeners into a single class.
</p>
<p>
    Ok That's makes me confused a little bit too, let's make it easy for us , whenever a specifique change happend in a model stage we use Observers pattern , for example (the example that we will adopte in this tutorial) :
    a new user create an account and we need to send that user a welcoming email ,we will use observe.
</p>
<p>Event are more generic and independent,and can be used anywhere ,in model,controller or whatever...(avoid to call them in view). Events are programmer defined effectively. They give you the ability to handle actions that you would not want a user to wait for (example being the purchase of a pod cast)</p>
<p>Ok we talked too much I know ,let's jump into the tutorial: </p>
<ul>
    <li><a target="_blank" href="https://signup.heroku.com/">1 Create a fresh Laravel Project</a></li>
    <li><a target="_blank" href="https://devcenter.heroku.com/articles/heroku-cli#download-and-install">2 Setup the database Configuration</a></li>
    <li><a href="">3 MailTrap Configuration </a></li>
    <li><a href="">4 Generating Mailables</a></li>
    <li><a href="">5 Customize The Email View. </a></li>
    <li><a href="">6 Generate Auth Scaffolding</a></li>
    <li><a href="">7 Generating UserObserver.</a></li>
    <li><a href="">8 Reference.</a></li>
    <!-- <li><a href="">10 Configure the Database on Heroku Using ClearDb adds-on.</a></li>-->
</ul>
<div class="1">
    <strong>1- Create a fresh Laravel Project:</strong>
    <p>
        Use the command line to create a new laravel project
    </p>
    <code>
        composer create-project --prefer-dist laravel/laravel lara-events-Observer "6.0.*"
    </code>
</div>
<div class="2">
    <strong>2- Setup the database Configuration:</strong>
    <p>
        Create a new database and generate your migrations, we care just about the users table.
    </p>
    <code>
        php artisan migrate
    </code>
</div>
<div class="3">
    <strong>3-MailTrap Configuration :</strong>
    <p>
        I will skip this step , you can find more tutorials talking about Mailtrap configuration for laravel, take a look on this tutorial
        <a href="https://medium.com/@christianjombo/setting-up-mailtrap-for-laravel-development-313133bb800c" target="_blank">Setting up Mailtrap for Laravel Development</a>
    </p>
</div>
<div class="4">
    <strong>4-Generating Mailables :</strong>
    <p>
        Once you have done. We will create a Mailable class for sending users the welcoming email ,go to your terminal and write the command line bellow:
    </p>
    <code>
        php artisan make:mail WelcomeEmail
    </code>
    <p>Next add this code to your WelcomeEmail class :</p>
    <code>use App\User;</code><br>
    <code>class WelcomeEmail extends Mailable</code><br>
    <code>{</code><br>
    <code>use Queueable, SerializesModels;</code><br>
    <code> protected $user;</code><br>
    <code> /**</code><br>
    <code> * Create a new message instance.</code><br>
    <code> *</code><br>
    <code>* @return void</code><br>
    <code>*/</code><br>
    <code>public function __construct(User $user)</code><br>
    <code>{</code><br>
    <code>$this->user = $user;</code><br>
    <code>}</code><br>

    <code> /**</code><br>
    <code> * Build the message.</code><br>
    <code>*</code><br>
    <code>* @return $this</code><br>
    <code>*/</code><br>
    <code>public function build()</code><br>
    <code>{</code><br>
    <code>return $this->subject('Welcome')</code><br>
    <code> ->from(env('MAIL_FROM_ADDRESS', 'contact@lara-git.com'))</code><br>
    <code> ->markdown('email.welcome')</code><br>
    <code> ->with([</code><br>
    <code> 'name' => $this->user->name,</code><br>
    <code>]);</code><br>
    <code>}</code><br>
    <code>}</code><br>
</div>
<div class="5">
    <strong>5-Customize The Email View</strong>
    <p>
        At this point ,we will create a new directory with name email and new view with name email.blade.php (views/email/welcome.blade.php).
    </p>
    <p>
        Go into this file and add the following code.
    </p>
    <p>
        <code>
            Hello {{user->name !Happy coding.
       </code>
    </p>
</div>
<div class="6">
    <strong>6-Generate Auth Scaffolding</strong>
    <p>
        Generate The Auth view scaffolidng to allow users registering 
    </p>
    <p>
       <code>
         php artisan make:auth
       </code>
    </p>
</div>
<div class="7">
    <strong>7-Generating UserObserver.</strong>
    <p>
        Here We go ,create the UserObserver by the command :
    </p>
    <p>
       <code>
         php artisan make:observer UserObserver --model=User
       </code>
    </p>
    <p>So As you can see a new directory is created inside app folder with a class UserObserver ,with some predefined methods like :created,updated,deleted...</p>
    <br>
    <p>
    Whenever a user is created , The method created will execute somme instruction you can add anything you like inside the method created or updated while it's depending to user 
    </p>
   <p> let's add the sending email logique to the created method :</p>
    
   <code>use App\User;</code><br>
   <code>use App\Mail\WelcomeEmail;</code><br>
   <code>use Mail;</code><br>
   <code>class UserObserver</code><br>
   <code>{</code><br>
    <code> public function created(User $user)</code><br>
    <code> {</code><br>
        <code>  //if a new user is created do something here </code><br>
        <code> Mail::to($user->email)->queue(new WelcomeEmail($user) );</code><br>
        <code>}</code><br>
    
</div>
<div class="8">
    <strong class="8">8 Reference.</strong>
    <p>We are done ,you can run your application now and try to register a new user ,and check the mailtrap inbox to see if you received a new welcome email </p>
    <p>Github Repository : <a href="https://github.com/hamza-topo/lara-events-observers">Laravel(Observers/Github)</a></p>
    <p>NB:I will make a part 2 for using Events in laravel</p>
</div>