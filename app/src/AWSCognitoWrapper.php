<?php
namespace AWSCognitoApp;

use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;

class AWSCognitoWrapper
{
    private const COOKIE_NAME = 'aws-cognito-app-access-token';

    private $region;
    private $client_id;
    private $userpool_id;

    private $client;

    private $user = null;

    public function __construct()
    {
        // if(!getenv('REGION') || !getenv('CLIENT_ID') || !getenv('USERPOOL_ID')) {
        //     throw new \InvalidArgumentException("Please provide the region, client_id and userpool_id variables in the .env file");
        // }

        // $this->region = getenv('REGION');
        // $this->client_id = getenv('CLIENT_ID');
        // $this->userpool_id = getenv('USERPOOL_ID');

        $this->region = 'eu-west-1';
        $this->client_id = '29hopm2caetdu17ehjuq73ce9j';
        $this->userpool_id = 'eu-west-1_c1Yd6bXyR';

        
    }

    public function initialize() : void
    {
        $this->client = new CognitoIdentityProviderClient([
          'version' => '2016-04-18',
          'region' => $this->region,
        ]);

        try {
            $this->user = $this->client->getUser([
                'AccessToken' => $this->getAuthenticationCookie()
            ]);
        } catch(\Exception  $e) {
            // an exception indicates the accesstoken is incorrect - $this->user will still be null
        }
    }

    public function authenticate(string $username, string $password) : string
    {
        try {
            $result = $this->client->adminInitiateAuth([
                'AuthFlow' => 'ADMIN_NO_SRP_AUTH',
                'ClientId' => $this->client_id,
                'UserPoolId' => $this->userpool_id,
                'AuthParameters' => [
                    'USERNAME' => $username,
                    'PASSWORD' => $password
                ],
            ]);
        } catch (\Exception $e) {
            echo '<script type="text/javascript">alert("' . $e . '")</script>';
            return $e->getMessage();
        }

        $this->setAuthenticationCookie($result->get('AuthenticationResult')['AccessToken']);

        return '';
    }

    public function signup(string $email, string $firstname, string $lastname, string $phonenumber, string $password) : string
    {
        try {
            $result = $this->client->signUp([
                'ClientId' => $this->client_id,
                'Username' => $email,
                'Password' => $password,
                'UserAttributes' => [
                    [
                        'Name' => 'name',
                        'Value' => $firstname
                    ],
                    [
                        'Name' => 'family_name',
                        'Value' => $lastname
                    ],
                    [
                        'Name' => 'email',
                        'Value' => $email
                    ],
                    [
                        'Name' => 'phone_number',
                        'Value' => $phonenumber
                    ]
                ]
            ]);
            // echo "<script type='text/javascript'>alert('The try loop is being executed');</script>";

        } catch (\Exception $e) {
            // $errorMsg = "This is the text for the error message!".$e->getMessage();
            // echo "<script type='text/javascript'>alert('An error occured!');</script>";
            return $e->getMessage();
            // return '';
        }

        return '';
    }

    public function confirmSignup(string $email, string $code) : string
    {
        try {
            $result = $this->client->confirmSignUp([
                'ClientId' => $this->client_id,
                'Username' => $email,
                'ConfirmationCode' => $code,
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return '';
    }

    public function sendPasswordResetMail(string $email) : string
    {
        try {
            $this->client->forgotPassword([
                'ClientId' => $this->client_id,
                'Username' => $email
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return '';
    }

    public function resetPassword(string $code, string $password, string $email) : string
    {
        try {
            $this->client->confirmForgotPassword([
                'ClientId' => $this->client_id,
                'ConfirmationCode' => $code,
                'Password' => $password,
                'Username' => $email
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return '';
    }

    public function isAuthenticated() : bool
    {
        return null !== $this->user;
    }

    public function getPoolMetadata() : array
    {
        $result = $this->client->describeUserPool([
            'UserPoolId' => $this->userpool_id,
        ]);

        return $result->get('UserPool');
    }

    public function getPoolUsers() : array
    {
        $result = $this->client->listUsers([
            'UserPoolId' => $this->userpool_id,
        ]);

        return $result->get('Users');
    }

    public function getUser() : ?\Aws\Result
    {
        return $this->user;
    }

    public function logout()
    {
        if(isset($_COOKIE[self::COOKIE_NAME])) {
            unset($_COOKIE[self::COOKIE_NAME]);
            setcookie(self::COOKIE_NAME, '', time() - 3600);
        }
    }

    private function setAuthenticationCookie(string $accessToken) : void
    {
        /*
         * Please note that plain-text storage of the access token is insecure and
         * not recommended by AWS. This is only done to keep this example
         * application as easy as possible. Read the AWS docs for more info:
         * http://docs.aws.amazon.com/cognito/latest/developerguide/amazon-cognito-user-pools-using-tokens-with-identity-providers.html
        */
        setcookie(self::COOKIE_NAME, $accessToken, time() + 3600);
    }

    private function getAuthenticationCookie() : string
    {
        return $_COOKIE[self::COOKIE_NAME] ?? '';
    }
}
