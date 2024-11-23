<h1>New Email From Forth Group Website!</h1>
<ul>
  <li>Name: <?= esc_html(get_field('full_name')); ?></li>
  <li>Email: <?= esc_html(get_field('email_address')); ?></li>
  <li>Subject: <?= esc_html(get_field('subject')); ?></li>
</ul>
<h2>Message:</h2>
<pre>
  <?= esc_html(get_field('message')); ?>
</pre>