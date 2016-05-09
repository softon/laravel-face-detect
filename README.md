# Laravel-Face-Detect
A Laravel Package for Face Detection in Images.

<strong>Installation</strong>

<ol>
  <li>Edit the composer.json add to the require array & run composer update<br>
      <pre><code> "softon/laravel-face-detect": "dev-master" </code></pre>
      <pre><code> composer update </code></pre>
  </li>
  <li>Add the service provider to the config/app.php file in Laravel<br>
      <pre><code> 'Softon\LaravelFaceDetect\LFDServiceProvider', </code></pre>
      
  </li>
  <li>Add an alias for the Facade to the config/app.php file in Laravel<br>
      <pre><code> 'Face' => 'Softon\LaravelFaceDetect\Facades\LFD', </code></pre>
      
  </li>
  <li>Publish the config & views by running <br>
      <pre><code> php artisan vendor:publish </code></pre>
      
  </li>
</ol>


<strong>Usage</strong>

