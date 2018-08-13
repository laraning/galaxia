<?php

return [
    'background' => [
        'title'    => 'Hi there! Welcome to Galaxia!',
        'baseline' => 'In case you do not have an account please contact support.',
    ],
    'form' => [
<<<<<<< HEAD
        'title'                => 'Welcome to ' . config('app.name') . '!<br/>Please sign in using the credentials below',
=======
        'title'                => 'Sign in into '.config('app.name').' wonderful admin',
>>>>>>> 3ca3cb74e66edaedbed4ad808647138180af127e
        'login'                => 'Login',
        'login_placeholder'    => 'Your email',
        'password'             => 'Password',
        'password_placeholder' => 'Your password',
        'keep_me_signed_in'    => 'Keep me signed in',
        'forgot_password'      => 'Forgot password?',
        'sign_in'              => 'Sign in',
    ],

    'footer' => [
        'title' => 'Copyright © '. date('Y') . ' ' . config('app.name') . '. All rights reserved.<br/>',
        'baseline' => 'Please follow us in the social media below!'
    ],

    'credentials_invalid' => 'Invalid credentials. Please try again'
];
