<h1>All threads</h1>
<ul>
	<li>TODO: Link to thread</li>
	<li>TODO: Link to thread</li>
	<li>TODO: Link to thread</li>
</ul>
<ul>
    <?php foreach ($threads as $v): ?>
    <li><a href="<?php eh(url('thread/view', array('thread_id' => $v->id))) ?>"><?php eh($v->title) ?></a></li>
    <?php 
        eh(url('thread/view', array('thread_id' => $v->id)));
        echo "<BR>";
        echo url('thread/view')."<BR>";
    ?>
    <?php endforeach ?>
</ul>

<a class="btn btn-large btn-primary" href="<?php eh(url('thread/create')) ?>">Create</a>