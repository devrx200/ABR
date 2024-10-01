<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
  // Local database configuration
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'abr_db');
} else {
  // Server database configuration
  define('DB_HOST', 'localhost');
  define('DB_USER', 'tbl_db');
  define('DB_PASS', 'cbktech@1A');
  define('DB_NAME', 'tbl_db');
}
// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  include('admin/config/function.php');
  // echo "Connected successfully";

  //Website Name From Admin Table
  $website_name = getvalfield($conn, 'adminlogin', "website_name", "1");
  $domain_url = getvalfield($conn, 'adminlogin', "domain_url", "1");

  //Social-Links
  $youtube_link = getvalfield($conn, 'social_links', "youtube", "1");
  $facebook_link = getvalfield($conn, 'social_links', "facebook", "1");
  $twitter_link = getvalfield($conn, 'social_links', "twitter", "1");
  $instagram_link = getvalfield($conn, 'social_links', "instagram", "1");

  //Contact-Us
  $website_address = getvalfield($conn, 'contact_info', "address", "1");
  $website_mobile = getvalfield($conn, 'contact_info', "mobile", "1");
  $website_email = getvalfield($conn, 'contact_info', "email", "1");
  $website_url = getvalfield($conn, 'contact_info', "website_url", "1");
  $map_url = getvalfield($conn, 'contact_info', "map_url", "1");
  // Logo-Icon
  $header_logo_location = getvalfield($conn, 'logo_icon', "header_location", "1");
  $footer_logo_location = getvalfield($conn, 'logo_icon', "footer_location", "1");
  
  // About Page 
  $about_title = getvalfield($conn, 'about', "title", "1");
  $about_description = getvalfield($conn, 'about', "description", "1");
  $about_url = getvalfield($conn, 'about', "location", "1"); 

}

// echo "Connected successfully";