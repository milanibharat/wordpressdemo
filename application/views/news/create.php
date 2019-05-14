<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">Title</label>
<input type="input" name="title" /><br /><br />

<label for="text">Text</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Create news item" />

<?php
//example for calendar
$data = array(
    3 => 'http://example.com/news/article/2006/06/03/',
    7 => 'http://example.com/news/article/2006/06/07/',
    13 => 'http://example.com/news/article/2006/06/13/',
    26 => 'http://example.com/news/article/2006/06/26/'
);

echo $this->calendar->generate(2018, 1, $data);
?>
</form>