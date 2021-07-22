<?php
/**
 * @file
 * Contains Authentication type class.
 */

/**
 * @file
 * This class represents authentication type.
 */
class AuthenticationType {

  public static $SMS_AND_EMAIL = array (
    'id'   => 'otp-over-sms-and-email',
    'name' => 'OTP Over SMS and EMAIL',
    'code' => 'SMS AND EMAIL',
    'description' => 'You will receive a one time passcode on your mobile phone and email. You have to enter the otp on your screen to login. Supported in Desktops, Laptops, Smartphones,Feature Phones.',
    'supported-for' => array (
      'Smartphones',
      'Feature Phones',
      'Desktops',
      'Laptops'
    ),
    'challenge' => TRUE,
    'oob' => FALSE
  );

  public static $OTP_OVER_EMAIL = array (
    'id' => 'otp-over-email',
    'name' => 'OTP Over Email',
    'code' => 'EMAIL',
    'description' => 'You will receive a one time passcode via an email. You have to enter the OTP on your screen authenticate yourself. Supported in Smartphones, Feature Phones.',
    'supported-for' => array (
      'Laptops',
    ),
    'challenge' => TRUE,
    'oob' => FALSE
  );

  public static $SMS = array (
    'id'   => 'otp-over-sms',
    'name' => 'OTP Over SMS',
    'code' => 'SMS',
    'description' => 'You will receive a one time passcode via SMS on your phone. You have to enter the otp on your screen to login. Supported in Smartphones, Feature Phones.',
    'supported-for' => array (
      'Smartphones',
      'Feature Phones'
    ),
    'challenge' => TRUE,
    'oob'  => FALSE
  );

public static $OTP_OVER_PHONE = array (
    'id'   => 'otp-over-phone',
    'name' => 'OTP Over Phone Call',
    'code' => 'PHONE VERIFICATION',
    'description' => 'You will receive a one time passcode via phone call. You have to enter the otp on your screen to login. Supported in Smartphones, Feature Phones and Landlines.',
    'supported-for' => array (
        'Smartphones',
        'Feature Phones',
        'Landline'
    ),
    'challenge' => TRUE,
    'oob'  => FALSE
);

  public static $EMAIL = array (
    'id'   => 'email',
    'name' => 'OTP Over Email',
    'code' => 'EMAIL',
    'description' => 'You will receive a one time passcode via Email. You have to enter the otp on your screen to login. Supported in Smartphones, Feature Phones.',
    'supported-for' => array (
      'Desktops',
      'Laptops',
      'Smartphones'
    ),
    'challenge' => TRUE,
    'oob'  => FALSE
  );

  // Out of band Email
  public static $EMAIL_VERIFICATION = array (
    'id'   => 'email-verification',
    'name' => 'Email Verification',
    'code' => 'OUT OF BAND EMAIL',
    'description' => 'You will receive an email with link. You have to click the ACCEPT or DENY link to verify your email. Supported in Desktops, Laptops, Smartphones.',
    'supported-for' => array (
      'Desktops',
      'Laptops',
      'Smartphones'
    ),
    'challenge' => TRUE,
    'oob'  => TRUE
  );
  public static $GOOGLE_AUTHENTICATOR = array (
    'id'   => 'google-authenticator',
    'name' => 'Google Authenticator',
    'code' => 'GOOGLE AUTHENTICATOR',
    'description' => 'You have to enter  code generated by Google Authenticator App to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => FALSE,
    'oob'  => FALSE
  );

  public static $MICROSOFT_AUTHENTICATOR = array (
    'id' => 'microsoft-authenticator',
    'name' => 'Microsoft Authenticator',
    'code' => 'MICROSOFT AUTHENTICATOR',
    'description' => 'You have to scan the QR code from <em>Microsoft Authenticator App</em> and enter code generated by app to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => FALSE,
    'oob' => FALSE
  );

  public static $AUTHY_AUTHENTICATOR = array (
    'id' => 'authy-authenticator',
    'name' => 'Authy Authenticator',
    'code' => 'AUTHY AUTHENTICATOR',
    'description' => 'You have to scan the QR code from <em>Authy Authenticator App</em> and enter code generated by app to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => FALSE,
    'oob' => FALSE
  );

  public static $LASTPASS_AUTHENTICATOR = array (
    'id' => 'lastpass-authenticator',
    'name' => 'LastPass Authenticator',
    'code' => 'LASTPASS AUTHENTICATOR',
    'description' => 'You have to scan the QR code from <em>LastPass Authenticator App</em> and enter code generated by app to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => FALSE,
    'oob' => FALSE
  );




  public static $QR_CODE = array (
    'id'   => 'qrcode-authentication',
    'name' => 'QR Code Authentication',
    'code' => 'MOBILE AUTHENTICATION',
    'description' => 'You have to scan the QR Code from your phone using miniOrange Authenticator App to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => TRUE,
    'oob'  => TRUE
  );

  public static $KBA = array (
    'id'   => 'kba-authentication',
    'name' => 'Security Questions (KBA)',
    'code' => 'KBA',
    'description' => 'You have to answers some knowledge based security questions which are only known to you to authenticate yourself. Supported in Desktops, Laptops, Smartphones.',
    'supported-for' => array (
      'Desktops',
      'Laptops',
      'Smartphones'
    ),
    'challenge' => TRUE,
    'oob'  => FALSE
  );

  public static $SOFT_TOKEN = array (
    'id'   => 'soft-token',
    'name' => 'Soft Token',
    'code' => 'SOFT TOKEN',
    'description' => 'You have to enter code generated by miniOrange Authenticator App to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => FALSE,
    'oob'  => FALSE
  );

  public static $PUSH_NOTIFICATIONS = array (
    'id'   => 'push-notifications',
    'name' => 'Push Notifications',
    'code' => 'PUSH NOTIFICATIONS',
    'description' => 'You will receive a push notification on your phone. You have to ACCEPT or DENY it to login. Supported in Smartphones only.',
    'supported-for' => array (
      'Smartphones'
    ),
    'challenge' => TRUE,
    'oob'  => TRUE
  );

  public static $HARDWARE_TOKEN = array (
    'id'   => 'hardware-token',
    'name' => 'Hardware Token (YubiKey)',
    'code' => 'HARDWARE TOKEN',
    'description' => 'You can press the button on your YubiKey Hardware token which generate a random key.',
    'supported-for' => array (
      'hardware-token'
    ),
  );

  public static function getAuthType($code) {
    $class = new ReflectionClass('AuthenticationType');
    $arr = $class->getStaticProperties();
    foreach ($arr as $authType) {
      if (strcasecmp($authType['code'], $code) == 0) {
        return $authType;
      }
    }
    return NULL;
  }

  public static function isCodeBelongsToAAuthenticator($code){
    return in_array($code,array(AuthenticationType::$GOOGLE_AUTHENTICATOR['code'],AuthenticationType::$MICROSOFT_AUTHENTICATOR['code'],AuthenticationType::$LASTPASS_AUTHENTICATOR['code'],AuthenticationType::$AUTHY_AUTHENTICATOR['code']));
  }

}
