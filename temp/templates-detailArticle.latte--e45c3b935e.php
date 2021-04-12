<?php

use Latte\Runtime as LR;

/** source: ../templates/detailArticle.latte */
final class Templatee45c3b935e extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel blog - ';
		echo LR\Filters::escapeHtmlText($article->getTitle()) /* line 7 */;
		echo '</title>
</head>
<body>
<h2>';
		echo LR\Filters::escapeHtmlText($article->getTitle()) /* line 10 */;
		echo '</h2>

<p>';
		echo LR\Filters::escapeHtmlText($article->getContent()) /* line 12 */;
		echo '</p>
    
</body>
</html>';
		return get_defined_vars();
	}

}
