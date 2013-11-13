<!doctype html>
<meta charset="utf-8">
<title>Archived Conservative Party Speeches</title>

<ul>
<? foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('speeches')) as $fileinfo): ?>
<? if ($fileinfo->isFile()): ?>
<? $path = $fileinfo->getPathname(); ?>
<? $doc = new DOMDocument; @$doc->loadHTMLFile($path); $xpath = new DOMXPath($doc); ?>
<? $title = $xpath->evaluate('string(//h1[1])'); ?>
<? list(, $year, $month) = explode('/', $path); ?>
    <li><a href="<?= $path ?>">[<?= $month ?>/<?= $year ?>] <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></a></li>
<? endif; ?>
<? endforeach; ?>
</ul>

