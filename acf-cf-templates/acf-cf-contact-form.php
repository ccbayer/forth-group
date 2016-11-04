<h1>New Email From Forth Group Website!</h1>
<ul>
  <li>Name: <?php the_field('full_name');?></li>
  <li>Email: <?php the_field('email_address');?></li>
  <li>Subject:  <?php the_field('subject');?></li>
</ul>
<h2>Message:</h2>
<pre>
  <?php the_field('message'); ?>
</pre>
