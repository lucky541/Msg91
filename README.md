#  [Msg91 PHP API Library](http://www.msg91.com)

Msg91 PHP API Doc.
  - Text SMS
  - Send OTP
  - Reseller
  - Phonebook
  - Virtual Number
 
### Install via composer
- Step1: Add this dependency in the required section of the composer.json
```
 "lucky/msg91":"dev-master"
```
- Step1: After this run 
 ```
 compoer update
 ```
 - Step3: After this is done you need to import the `vendor/autoload.php`. 
  > Note : Step3 is required only if the autoload file is not imported before. 

### How to use 
- Now you need to create an Object of Msg91's
> For creating an object of Msg91 you need to pass your Msg91's AuthKey. Thats all you are ready to explore all the functionalities that Msg91 offers.
```
 // create an object of msg91
 $msg91 = new \lucky\Msg91\Msg91('Msg91-User-Authkey');
```

> Note: Only few basic operations are only shown

#### Send Text SMS
- An example to send text sms using Msg91's Object.
```php
    $mobiles = "919999999999"; // mobile no. to whom you want to send sms. Including country code.
    $message = " your text sms will come up here"; // Message content to send
    $sender = "MSGIND"; // Receiver will see this as sender's ID.
    $route = "1"; // Route you want to use. 1 for promotional route and 4 for transactional route 
    $country = "Country_code"; //numeric	0 for international,1 for USA, 91 for India.

    $data = array( "authkey" => AUTH_KEY,
                    "mobiles" => $mobiles,
                    "message" => $message,
                    "sender" => $sender,
                    "route" => $route,
                    "country" => $country,
                 );

    $output = $msg91->sendSMS($data);
```
 
#### Send  OTP
- An example to send Otp Message
```php
    $mobile = "919999999999"; // Keep number in international format (with country code)
    $sender = "OTPSMS";   // Receiver will see this as sender's ID. (default : OTPSMS)
	
    // Message content to send. (default : Your verification code is ##OTP##.)
    $message = "Your verification code is ##OTP##."; 
	
    $data = array( "authkey" => AUTH_KEY,
		   "mobile" => $mobile,
		   "message" => $message,
		   "sender" => $sender,
	         );
	              
    $output = $msg91->otp->sendOTP($data);
```
### Reseller's Operations

- #### Add Client
```php
    	$user_full_name     =   "fname lname";     //(varchar)	Full name of user
	$user_name          =   "user_name";   //(varchar) User's name
	$user_mobile_number =   "user_mobile_number";        //(int) User's mobile
	$user_email         =   "user_email";   //(varchar) User's email
	$user_company_name  =   "user_company_name";         //(varchar) User's company name
	$user_industry      =   "user_industry";         //(varchar) User's industry
	$user_expiry        =    "user_expiry";         //(int) Expiry date of user's account
	$user_country_code  =    "user_country_code";               //(int) User country code

	$data = array( "authkey" => AUTH_KEY,
	               "user_full_name" => $user_company_name,  
	               "user_name"=> $user_name,           
	               "user_mobile_number" =>$user_mobile_number,
	               "user_email" => $user_email,       
	               "user_company_name"=>$user_company_name,  
	               "user_industry"=> $user_industry,    
	               "user_expiry" => $user_expiry,      
	               "user_country_code" => $user_country_code,
	             );

	$output = $msg91->sendOTP($data);
```
- #### TO List Client

```php
    $data = array( "authkey" => AUTH_KEY  );
    
	$output = $msg91->listClient($data);
```

### Phonebook's Operations

- #### Add Contact
```php
    $name = "contact name";  //contact name
    $mob_no = "mobile no"; //mobile no.
    $group = "group ID"; // group ID
 
     $data = array( "authkey" => AUTH_KEY,
	            "name" => $name,
	            "mob_no" => $mob_no,
	            "group" => $group,
                  );

    $output = $msg91->addClient($data);
  ```

- #### Delete Client
```php
    $contact_id="contact id";  //contact id
    $data = array( "authkey" => AUTH_KEY,
		   "contact_id" => $contact_id,
		 );
		
	$output = $msg91->deleteContact($data);
   ```



















































































































































































































































































































































































































































































































































































































































































































































