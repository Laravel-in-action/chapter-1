$user = array('username' => 'caspian356', 'password' => 'P@s5w0rD');

if (Auth::attempt($user))
{
    return 'User has been logged in successfully';
} 
else 
{
	return 'Login failed';
}

...	

if (Auth::check())
{
    return 'User is logged in';
}

...

$username = Auth::user()->username;

echo $username;
// Outputs 'caspian356'

...

Auth::logout();	
