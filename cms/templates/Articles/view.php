<!-- File: templates/Articles/view.php -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
// Add the following line
<p><b>Tags:</b> <?= h($article->tag_string) ?></p>