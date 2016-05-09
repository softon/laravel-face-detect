# Laravel-Face-Detect
A Laravel Package for Face Detection and Cropping in Images.

<strong>Installation</strong>

<ol>
  <li>Edit the composer.json add to the require array & run composer update<br>
      <pre><code> "softon/laravel-face-detect": "dev-master" </code></pre>
      <pre><code> composer update </code></pre>
  </li>
  <li>Add the service provider to the config/app.php file in Laravel<br>
      <pre><code> 'Softon\LaravelFaceDetect\FaceDetectServiceProvider', </code></pre>
      
  </li>
  <li>Add an alias for the Facade to the config/app.php file in Laravel<br>
      <pre><code> 'FaceDetect' => 'Softon\LaravelFaceDetect\Facades\FaceDetect', </code></pre>
      
  </li>
  <li>Publish the config file by running <br>
      <pre><code> php artisan vendor:publish </code></pre>
      
  </li>
</ol>


<strong>Usage</strong>

To extract the Face and save the cropped image use...
```php
use \Softon\LaravelFaceDetect\Facades\FaceDetect;


FaceDetect::extract($imagefilepath)->save($savefilepath);
```


To extract the Face and return the cropping coordinates without cropping the image...
```php
use \Softon\LaravelFaceDetect\Facades\FaceDetect;


$crop_params = FaceDetect::extract($imagefilepath)->face;   // return array with x,y,width
```

To detect if face is found in a image...
```php
use \Softon\LaravelFaceDetect\Facades\FaceDetect;


$crop_params = FaceDetect::extract($imagefilepath)->face_found;     // returns true/false
```

You may edit the config file facedetect.php in the config directory to add aditional padding to the cropped Images.

